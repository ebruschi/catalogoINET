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

// Obtén el ID de la institución educativa seleccionada desde la página principal
$institucionId = $_POST['institucionId']; // Asegúrate de que el nombre del campo coincida con tu formulario

// Consulta SQL para obtener los planes de estudio de la institución seleccionada
$sql = "SELECT plan_Id, nombre, oferta_id, sector_id, anio, matricula_varon, matricula_mujer, matricula_total FROM planes_estudio WHERE instit_Id = $institucionId";

$result = $conn->query($sql);

// Comprobar si hay resultados
if ($result->num_rows > 0) {
    echo "<h2>Planes de Estudio</h2>";
    echo "<table>";
    echo "<tr><th>ID</th><th>Nombre</th><th>Oferta ID</th><th>Sector ID</th><th>Año</th><th>Matrícula Varón</th><th>Matrícula Mujer</th><th>Matrícula Total</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["plan_Id"] . "</td>";
        echo "<td>" . $row["nombre"] . "</td>";
        echo "<td>" . $row["oferta_id"] . "</td>";
        echo "<td>" . $row["sector_id"] . "</td>";
        echo "<td>" . $row["anio"] . "</td>";
        echo "<td>" . $row["matricula_varon"] . "</td>";
        echo "<td>" . $row["matricula_mujer"] . "</td>";
        echo "<td>" . $row["matricula_total"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    // Si no hay resultados, muestra un mensaje indicando que no se encontraron planes de estudio.
    echo "<h2>No se encontraron planes de estudio para esta institución.</h2>";
}

// Cierra la conexión a la base de datos
$conn->close();
?>
