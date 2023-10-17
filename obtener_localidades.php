<?php
// Comprueba si se recibió un valor de departamento
if (isset($_POST['departamentoId'])) {
    $departamentoId = $_POST['departamentoId'];

    // Realiza la conexión a la base de datos (ajusta los valores según tu configuración)
    $servername = "localhost";
    $username = "id21379088_ret";
    $password = "Maria2023%";
    $dbname = "id21379088_reta";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica la conexión
    if ($conn->connect_error) {
        die("Error en la conexión a la base de datos: " . $conn->connect_error);
    }

    // Consulta SQL para obtener las localidades relacionadas con el departamento seleccionado
    $sql = "SELECT Id, Descripcion FROM localidades WHERE Departamento_Id = $departamentoId";
    $result = $conn->query($sql);

    // Rellenar el menú desplegable de localidades
    $localidadesOptions = "<option value=''>Selecciona una localidad</option>";

    while ($row = $result->fetch_assoc()) {
        $localidadesOptions .= "<option value='" . $row["Id"] . "'>" . $row["Descripcion"] . "</option>";
    }

    // Devuelve las opciones de localidades como respuesta a la solicitud AJAX
    echo $localidadesOptions;
} else {
    // Si no se proporciona el departamento, muestra un mensaje de error
    echo "Error: Departamento no especificado.";
}
?>
