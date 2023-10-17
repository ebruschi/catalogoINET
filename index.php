<!DOCTYPE html>
<html>

   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

      <style>
         .resaltado {
         background-color: yellow;
         }
         /* Estilos adicionales */
         .expert_thumb img {
         width: 150px;
         height: 150px;
         object-fit: cover;
         }
         /* Estilos para las imágenes de formato web */
         .imagen-web {
         display: block;
         max-width: 100%;
         height: auto;
         margin: 0 auto;
         border: 1px solid #ccc;
         border-radius: 4px;
         box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
         }
         /* Estilos generales */
         body {
         margin: 0;
         font-family: Arial, sans-serif;
         background-color: #f2f2f2;
         }
         /* Estilos para la barra de navegación */
         .navbar {
         background-color: #1BB8ED;
         position: fixed;
         top: 0;
         width: 100%;
         z-index: 9999;
         display: flex;
         justify-content: flex-end;
         }
         .navbar ul {
         list-style-type: none;
         margin: 0;
         padding: 0;
         }
         .navbar li {
         display: inline-block;
         margin-left: 10px;
         }
         .navbar li a {
         display: block;
         color: white;
         text-align: center;
         padding: 14px 16px;
         text-decoration: none;
         }
         .navbar li a:hover {
         background-color: #135F87;
         }
         /* Estilos para el botón de despliegue en dispositivos móviles */
         .navbar .menu-icon {
         display: none;
         }
         /* Estilos para el menú desplegable en dispositivos móviles */
         @media (max-width: 768px) {
         .navbar {
         justify-content: flex-end;
         }
         .navbar ul {
         display: none;
         text-align: left;
         }
         .navbar ul.show {
         display: block;
         }
         .navbar li {
         display: block;
         margin-left: 0;
         margin-bottom: 10px;
         }
         .navbar .menu-icon {
         display: flex;
         justify-content: center;
         align-items: center;
         color: white;
         text-align: center;
         width: 40px;
         height: 40px;
         border-radius: 50%;
         cursor: pointer;
         background-color: #135F87;
         box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
         transition: background-color 0.3s ease;
         }
         .navbar .menu-icon:hover {
         background-color: #0D425A;
         }
         .navbar .menu-icon:before {
         content: "\f0c9";
         font-family: "Font Awesome 5 Free";
         font-weight: 900;
         font-size: 20px;
         }
         }
         /* Estilos para el contenido principal */
         .container {
         max-width: 1200px;
         margin: 80px auto;
         padding: 20px;
         background-color: #fff;
         box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
         }
         .container h1 {
         color: #1BB8ED; /* Color celeste para el título */
         font-size: 28px;
         margin-bottom: 20px;
         }
         .container p {
         color: #555;
         font-size: 16px;
         line-height: 1.5;
         margin-bottom: 20px;
         }
         .container img {
         max-width: 100%;
         height: auto;
         margin-bottom: 20px;
         }
         .container button {
         padding: 10px 20px;
         background-color: #1BB8ED;
         color: #fff;
         border: none;
         border-radius: 4px;
         font-size: 16px;
         cursor: pointer;
         }
         .container button:hover {
         background-color: #0D8ABF;
         }
         /* Estilos para la sección de contenido */
         #contenido {
         margin-top: 40px;
         }
         #contenido h2 {
         color: #1BB8ED; /* Color celeste para los títulos */
         font-size: 24px;
         margin-bottom: 10px;
         }
         #contenido p {
         color: #555;
         font-size: 14px;
         line-height: 1.5;
         margin-bottom: 10px;
         }
         #contenido ul {
         color: #555;
         font-size: 14px;
         margin-bottom: 10px;
         padding-left: 20px;
         }
         /* Estilos para el botón de reproducción de voz */
         #boton-voz {
         display: inline-block;
         margin-bottom: 20px;
         }
         #boton-pausa {
         display: none;
         margin-bottom: 20px;
         }
         /* Estilos para el contenido del footer */
         @media only screen and (max-width: 767px) {
         /* Estilos para dispositivos móviles con una anchura máxima de 767px */
         .footer {
         display: none; /* Oculta el footer en dispositivos móviles */
         }
         .footer .copy_right {
         text-align: justify; /* Justifica el contenido del footer en dispositivos móviles */
         }
         }
         @media only screen and (min-width: 768px) {
         /* Estilos para dispositivos con una anchura mínima de 768px */
         .footer {
         position: fixed; /* Fija el footer en la parte inferior de la página */
         left: 0;
         right: 0;
         bottom: 0;
         padding: 20px 0; /* Ajusta el relleno superior e inferior según sea necesario */
         background-color: transparent; /* Establece el fondo como transparente */
         text-align: center; /* Centra el contenido del footer */
         color: white; /* Establece el color del texto en blanco */
         font-weight: bold; /* Establece el texto en negrita */
         }
         }  
         /* Estilos para el contenido principal */
         .content {
         padding-top: 60px;
         margin: 20px;
         }
         /* Estilos para el título principal */
         h1 {
         color: #333;
         font-size: 28px;
         margin-bottom: 20px;
         }
         /* Estilos para el subtítulo */
         h2 {
         color: #333;
         font-size: 24px;
         margin-bottom: 15px;
         }
         /* Estilos para los párrafos */
         .parrafo {
         text-align: justify;
         color: #555;
         font-size: 16px;
         line-height: 1.6;
         margin-bottom: 15px;
         }
         /* Estilos para el equipo */
         .team {
         display: flex;
         flex-wrap: wrap;
         justify-content: space-between;
         margin-top: 30px;
         margin-bottom: 60px; /* Añadido: Margen inferior para separar del footer */
         }
         .team_member {
         width: calc(33.33% - 20px);
         margin-bottom: 20px;
         background-color: #fff;
         padding: 20px;
         box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
         }
         .team_member img {
         width: 100%;
         height: auto;
         margin-bottom: 10px;
         border-radius: 50%;
         }
         .team_member h3 {
         color: #333;
         font-size: 20px;
         margin-bottom: 5px;
         }
         .team_member p {
         color: #555;
         font-size: 14px;
         margin-bottom: 0;
         }
         /* Estilos para el botón de scroll hacia arriba */
         .scroll-to-top {
         position: fixed;
         bottom: 20px;
         right: 20px;
         z-index: 9999;
         display: none;
         width: 40px;
         height: 40px;
         border-radius: 50%;
         background-color: #135F87;
         color: white;
         text-align: center;
         line-height: 40px;
         cursor: pointer;
         box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
         transition: background-color 0.3s ease;
         }
         .scroll-to-top:hover {
         background-color: #0E4F6E;
         }
         /* Estilos adicionales para el carrusel */
         .owl-carousel .owl-stage-outer {
         padding: 10px 0;
         }
         .owl-carousel .owl-stage {
         display: flex;
         align-items: center;
         }
         .owl-carousel .owl-item {
         display: flex;
         justify-content: center;
         }
         .owl-carousel .owl-dots {
         display: flex;
         justify-content: center;
         margin-top: 20px;
         }
         .owl-carousel .owl-dots .owl-dot {
         display: inline-block;
         width: 10px;
         height: 10px;
         margin: 0 5px;
         background-color: #888;
         border-radius: 50%;
         transition: background-color 0.3s ease;
         }
         .owl-carousel .owl-dots .owl-dot.active {
         background-color: #135F87;
         }

   /* Oculta la opción "Selecciona una institución" en el menú desplegable de instituciones educativas */
        #selectInstitucion option[value=""] {
            display: none;
         }

      </style>

      <script>
         var synthesis = window.speechSynthesis;
         var utterance = new SpeechSynthesisUtterance();
         utterance.rate = 0.8;
         
         var isPlaying = false;
         var intervalId;
         var palabras = [];
         var palabraIndex = 0;
         
         function resaltarPalabra() {
           var palabrasResaltadas = document.getElementsByClassName('parrafo')[0].querySelectorAll('span');
         
           var isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
           var tiempoEspera = isMobile ? 650 : 420; // Ajusta el tiempo de espera en dispositivos móviles
         
           intervalId = setInterval(function() {
               if (isPlaying && palabraIndex < palabrasResaltadas.length) {
                palabrasResaltadas[palabraIndex].classList.add('resaltado');
               palabrasResaltadas[palabraIndex].scrollIntoView({
                   block: 'center',
                   inline: 'center',
                   behavior: 'smooth'
               });
                   palabraIndex++;
                } else {
           clearInterval(intervalId);
               }
         }, tiempoEspera);
         
         
         }
         
         function toggleMenu() {
           var navbarMenu = document.getElementById('navbar-menu');
           navbarMenu.classList.toggle('active');
         }
         
              
      </script>

   </head>

   <body>

      <div class="navbar">
         <div class="menu-icon" onclick="toggleMenu()">&#9776;</div>
         <!-- Botón de despliegue en dispositivos móviles -->
         <ul id="navbar-menu">
            <li></li>
         </ul>
      </div>
      <div class="container">
         <h1 class="destacado">CATÁLOGO INET 2023</h1>
      </div>
      
      <script>
         // Función para mostrar/ocultar el menú en dispositivos móviles
         function toggleMenu() {
             var menu = document.getElementById("navbar-menu");
             menu.classList.toggle("show");
         }
      </script>
     

       <div class="container">
        <h2>JURISDICCIÓN</h2>
        <form method="post" action="buscar.php">
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

            // Consulta SQL para obtener las jurisdicciones
            $sql = "SELECT Id, Descripcion FROM jurisdicciones";
            $result = $conn->query($sql);

            // Rellenar el menú desplegable con las jurisdicciones
            echo "<select id='selectJurisdiccion' name='jurisdiccionId' onchange='getDepartamentos()'>";
            echo "<option value=''>Selecciona una jurisdicción</option>";

            while ($row = $result->fetch_assoc()) {
                echo "<option value='" . $row["Id"] . "'>" . $row["Descripcion"] . "</option>";
            }

            echo "</select>";

            // Cierra la conexión a la base de datos
            $conn->close();
            ?>
            <!-- Fin del ejemplo en PHP -->

            <!-- Agrega un botón para realizar la búsqueda -->
            <!--<button type="submit" name="buscar">Buscar</button> -->
        </form>

        <!-- Área para mostrar los resultados de la búsqueda -->
        <div id="resultadoBusqueda"></div>
    </div>

    <div class="container">
        <h2>DEPARTAMENTOS</h2>
        <!-- Agrega una lista desplegable para seleccionar el departamento -->
        <select id="selectDepartamento" name="departamentoId">
            <option value="">Selecciona un departamento</option>
            <!-- Las opciones de departamentos se llenarán dinámicamente en respuesta a la selección de jurisdicción -->
        </select>
    </div>

    <div class="container">
        <h2>LOCALIDADES</h2>
        <select id="selectLocalidad" name="localidadId">
            <option value="">Selecciona una localidad</option>
            <!-- Opciones de localidades se generarán dinámicamente desde la base de datos -->
        </select>
    </div>

  
    <div class="container">
        <h2>INSTITUCIONES EDUCATIVAS</h2>
        <select id="selectInstitucion" name="institucionId">
            <!-- Crea una opción vacía y ocúltala -->
            <option value="" style="display: none;">Selecciona una institución</option>
            <!-- Las opciones de instituciones se llenarán dinámicamente en respuesta a la selección de localidad -->
        </select>
        <p id="gestionInfo"></p>
    </div>

   
    <div class="container">
        <h2></h2>
        <div id="resultadoPlanesEstudio"></div>

        <!-- Agrega una tabla con un ID para mostrar los planes de estudio -->
<table id="tablaPlanesEstudio">
    <thead>
        <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <!-- Aquí se mostrarán los planes de estudio -->
    </tbody>
</table>

    
   </div>

    
    <script>

        function getDepartamentos() {
            // Obtiene el valor seleccionado en el menú de jurisdicción
            const jurisdiccionId = document.getElementById('selectJurisdiccion').value;
            const selectDepartamento = document.getElementById('selectDepartamento');

            // Realiza una solicitud AJAX para obtener los departamentos según la jurisdicción seleccionada
            $.ajax({
                url: 'obtener_departamentos.php', // Reemplaza con la URL correcta
                method: 'POST',
                data: {
                    jurisdiccionId: jurisdiccionId
                },
                success: function (data) {
                    // Actualiza las opciones de departamentos con los resultados de la solicitud
                    selectDepartamento.innerHTML = data;
                },
                error: function () {
                    alert('Error al obtener departamentos.');
                }
            });
        }


    function getLocalidades() {
    const departamentoId = document.getElementById('selectDepartamento').value;
    const selectLocalidad = document.getElementById('selectLocalidad');

    // Realiza una solicitud AJAX para obtener las localidades según el departamento seleccionado
    $.ajax({
        url: 'obtener_localidades.php', // Reemplaza con la URL correcta
        method: 'POST',
        data: {
            departamentoId: departamentoId
        },
        success: function (data) {
            // Actualiza las opciones de localidades con los resultados de la solicitud
            selectLocalidad.innerHTML = data;
        },
        error: function () {
            alert('Error al obtener localidades.');
        }
    });
}

    // Asocia la función getLocalidades al evento change del menú de departamentos
    document.getElementById('selectDepartamento').addEventListener('change', getLocalidades);

function getInstitucionesEducativas() {
    const localidadId = document.getElementById('selectLocalidad').value;
    const selectInstitucion = document.getElementById('selectInstitucion');

    // Realiza una solicitud AJAX para obtener las instituciones educativas según la localidad seleccionada
    $.ajax({
        url: 'obtener_instituciones.php', // Reemplaza con la URL correcta
        method: 'POST',
        data: {
            localidadId: localidadId
        },
        success: function (data) {
            // Actualiza las opciones de instituciones educativas con los resultados de la solicitud
            selectInstitucion.innerHTML = data;
        },
        error: function () {
            alert('Error al obtener instituciones educativas.');
        }
    });
}

// Al cargar la página, oculta la opción "Selecciona una institución"
document.addEventListener('DOMContentLoaded', function () {
    const selectInstitucion = document.getElementById('selectInstitucion');
    // Crea una opción vacía y oculta
    const defaultOption = document.createElement('option');
    defaultOption.value = '';
    defaultOption.textContent = 'Selecciona una institución';
    defaultOption.style.display = 'none';
    selectInstitucion.appendChild(defaultOption);
});


// Asocia la función getInstitucionesEducativas al evento change del menú de localidades
document.getElementById('selectLocalidad').addEventListener('change', getInstitucionesEducativas);


    // Asocia la función showGestionInfo al evento change del menú de instituciones
document.getElementById('selectInstitucion').addEventListener('change', showGestionInfo);

function showGestionInfo() {
    const institucionId = document.getElementById('selectInstitucion').value;

    // Realiza una solicitud AJAX para obtener la información de gestión según la institución seleccionada
    $.ajax({
        url: 'obtener_gestion.php', // Reemplaza con la URL correcta
        method: 'POST',
        data: {
            institucionId: institucionId
        },
        success: function (data) {
            // Actualiza el elemento de párrafo con la información de gestión
            document.getElementById('gestionInfo').textContent = data;
        },
        error: function () {
            alert('Error al obtener información de gestión.');
        }
    });
}


    function showPlanesEstudio() {
    // Obtiene el valor seleccionado en el menú de instituciones
    const institucionId = document.getElementById('selectInstitucion').value;
    console.log("Institución seleccionada: " + institucionId); // Agrega esta línea para depurar

    // Verifica si se ha seleccionado una institución educativa
    if (institucionId !== '') {
        // Realiza una solicitud AJAX para obtener los planes de estudio en función de la institución seleccionada
        $.ajax({
            url: 'obtener_planes_estudio.php', // Reemplaza con la URL correcta
            method: 'POST',
            data: {
                institucionId: institucionId
            },
            success: function (data) {
                // Actualiza la sección de visualización de planes de estudio con los resultados
                const tablaPlanesEstudio = document.getElementById('tablaPlanesEstudio'); // Asegúrate de que el ID sea correcto
                tablaPlanesEstudio.querySelector('tbody').innerHTML = data;
            },
            error: function () {
                alert('Error al obtener planes de estudio.');
            }
        });
    } else {
        // Muestra un mensaje de error si no se ha seleccionado una institución educativa
        alert('Error: Debes seleccionar una institución educativa.');
    }
}


// Asocia la función showPlanesEstudio al evento change del menú de instituciones
document.getElementById('selectInstitucion').addEventListener('change', showPlanesEstudio);

    </script>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    
   </body>
</html>