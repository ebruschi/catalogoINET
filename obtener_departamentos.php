<?php
// Verifica si se ha recibido el valor de jurisdicción
if (isset($_POST['jurisdiccionId'])) {
    // Obtén el valor de jurisdicción desde la solicitud AJAX
    $jurisdiccionId = $_POST['jurisdiccionId'];

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

    // Consulta SQL para obtener los departamentos según la jurisdicción seleccionada
    $sql = "SELECT Id, Descripcion FROM departamentos WHERE Jurisdiccion_Id = $jurisdiccionId";
    $result = $conn->query($sql);

    // Construye las opciones de departamentos
    $departamentosOptions = "<option value=''>Selecciona un departamento</option>";

    while ($row = $result->fetch_assoc()) {
        $departamentosOptions .= "<option value='" . $row["Id"] . "'>" . $row["Descripcion"] . "</option>";
    }

    // Devuelve las opciones de departamentos como respuesta a la solicitud AJAX
    echo $departamentosOptions;
} else {
    // Si no se proporciona la jurisdicción, muestra un mensaje de error
    echo "Error: Jurisdicción no especificada.";
}
?>

