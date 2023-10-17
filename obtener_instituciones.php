<?php
// Conexión a la base de datos (ajusta los valores según tu configuración)
    $servername = "localhost";
    $username = "id21379088_ret";
    $password = "Maria2023%";
    $dbname = "id21379088_reta";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error en la conexión a la base de datos: " . $conn->connect_error);
}

// Obtén el ID de la localidad seleccionada desde la página principal
$localidadId = $_POST['localidadId'];

// Consulta SQL para obtener las instituciones relacionadas con la localidad
$sql = "SELECT Instit_Id, Nombre FROM instituciones WHERE Localidad_Id = $localidadId";
$result = $conn->query($sql);

// Formatea los resultados como opciones de menú desplegable
$options = "<option value=''>Selecciona una institución</option>";

// ... (código para conectarte a la base de datos y obtener instituciones)

while ($row = $result->fetch_assoc()) {
    $nombreInstitucion = $row["Nombre"]; // Nombre de la institución

    echo "<option value='" . $row["Instit_Id"] . "'>" . $nombreInstitucion . "</option>";
    echo "<input type='hidden' id='direccion_" . $row["Instit_Id"] . "' value='$direccion'>";
    echo "<input type='hidden' id='contacto_" . $row["Instit_Id"] . "' value='$contacto'>";
}


// Cierra la conexión a la base de datos
$conn->close();

// Envía las opciones de instituciones de vuelta a la página principal
echo $options;
?>
