<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clínica de Cirugía Plástica</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* Animación de desvanecimiento */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px); /* Mueve el texto hacia abajo */
            }
            to {
                opacity: 1;
                transform: translateY(0); /* Regresa a su posición original */
            }
        }

        /* Clase para aplicar la animación */
        .animate-fade-in {
            animation: fadeIn 0.5s ease forwards; /* Duración de 0.5 segundos */
        }

        /* Barra de navegación */
        .navigation {
            position: fixed;
            top: 0; /* Coloca la barra en la parte superior */
            left: 0; /* Alinea la barra a la izquierda */
            right: 0; /* Alinea la barra a la derecha */
            z-index: 1000;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color:rgb(0, 0, 0);
            padding: 10px 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .navigation-container {
            display: flex;
            align-items: center;
            padding: 10px 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease;
        }

        body {
            background-color: #f0f0f0;
            font-family: 'Roboto', sans-serif;
            color: #000000; /* Texto negro */
            font-size: 14px;
        }
        a {
            display: inline-block; /* O block si es necesario */
            text-decoration: none; /* Elimina el subrayado */
        }

        .dark-theme {
            background-color: #000000; /* Fondo negro */
        }

        /* Estilos para el contenido */
        .content {
            background-color: #f0f0f0; /* Cambia este color al que desees para el fondo del contenido */
            padding: 50px; /* Espaciado interno */
            border-radius: 8px; /* Bordes redondeados */
            margin: 10px; /* Margen alrededor del contenido */
        }

        .background-section {
            background: linear-gradient(to right, #f9f9f9, #e0e0e0);
        }

        /* Logo */
        .navigation .logo {
            margin-right: auto;
            transition: transform 0.3s ease;
        }

        .navigation .logo img {
            height: 50px; /* Ajusta el tamaño del logo */
            width: auto;
            display: block;
        }

        .navigation .logo:hover {
            transform: scale(1.1);
        }

        /* Menú de navegación */
        .navigation ul {
            display: flex;
            list-style: none;
            margin: 0; /* Asegúrate de que no haya margen */
            padding: 0; /* Asegúrate de que no haya padding */
            margin-left: auto;
            margin-right: auto:
        }

        .navigation li {
            margin: 0 20px; /* Espaciado entre los elementos de la lista */
        }

        .navigation li a {
            transition: color 0.3s ease;
            text-decoration: none;
            color: #333;
            display: flex;
            align-items: center;
        }

        .navigation li a:hover {
            color: #f0f0f0; /* Color al pasar el ratón */
        }

        .navigation li.active a {
            font-weight: bold;
            color: #f0f0f0;
        }

        /* Íconos */
        .navigation .icon {
            margin-right: 8px;
        }
        .sobre-nosotros {
            max-width: 900px;
            margin: 0 auto;
            padding: 5px;
            text-align: center;
        }

    /* Estilos generales */
        .titulo {
            font-size: 2rem;
            font-weight: bold;
            color:rgb(0, 0, 0);
            margin-bottom: 15px;
        }

        .subtitulo {
            font-size: 1.5rem;
            font-weight: bold;
            color:rgb(48, 48, 48);
            margin-top: 20px;
        }

        .parrafo {
            font-size: 1rem;
            color: #333;
            line-height: 1.6;
            margin-bottom: 15px;
        }

        /* Sección de destacados */
        .destacados {
            text-align: center;
            padding: 50px 20px;
        }

        .grid-destacados {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            max-width: 1000px;
            margin: auto;
        }

        .destacado {
            background: #f8f8f8;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        .destacado:hover {
            transform: translateY(-5px);
            box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.15);
        }
            
        .destacado img {
            width: 10%;
            height: auto;
            object-fit: cover;
            border-radius: 10px;
        }

        .destacado h3 {
            margin-top: 15px;
            font-size: 18px;
            color: #333;
        }

        .destacado p {
            font-size: 14px;
            color: #666;
        }

        /* Lista de servicios */
        .lista {
            list-style: none;
            padding: 0;
        }

        .lista li {
            font-size: 1rem;
            color: #444;
            margin: 10px 0;
            padding-left: 20px;
            position: relative;
        }

        .lista li::before {
            content: "✔";
            position: absolute;
            left: 0;
            color: #0073B7;
            font-weight: bold;
        }

        /* Botón de contacto */
        .link {
            color: #0073B7;
            text-decoration: none;
            font-weight: bold;
            padding: 10px 15px;
            background: #005A8D;
            color: #fff;
            border-radius: 5px;
            display: inline-block;
            margin-top: 10px;
        }

        .link:hover {
            background: #004677;
        }

        .servicios {
            text-align: center;
            padding: 50px 20px;
        }

        #servicios {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); /* Se adapta a diferentes pantallas */
            gap: 20px;
            padding: 20px;
            background: #f8f8f8;
        }

        .grid-servicios {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); 
            gap: 20px;
            max-width: 1000px;
            margin: auto;
        }

        .servicio {
            background: white;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
        }

        .servicio:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
        }

        .servicio img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 20px;
        }

        .servicio h3 {
            color: #333;
            margin-top: 15px;
            font-size: 18px;
        }

        .servicio p {
            font-size: 14px;
            color: #666;
        }
        .servicio-info {
            flex: 1;
        }

        .servicio-info h3 {
            margin: 0;
            font-size: 22px;
        }

        .servicio-info p {
            margin: 5px 0;
            font-size: 16px;
            color: #555;
        }

        /* Estilo del precio */
        .precio {
            background: #28a745; /* Verde */
            color: white;
            font-weight: bold;
            padding: 8px 15px;
            border-radius: 5px;
            display: inline-block;
            margin-top: 10px;
            font-size: 1.1em;
        }

        /* Estilos para la sección de cirujanos*/
        #cirujanos {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); /* Se ajusta automáticamente */
            gap: 20px;
            padding: 20px;
            background: #f8f8f8;
        }

        .cirujano {
            position: relative;
            display: flex;
            align-items: center;
            gap: 50px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            overflow: hidden;
        }

        .cirujano:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
        }

        .cirujano-imagen img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
        }

        .info {
            flex: 1;
            transition: opacity 0.3s ease;
        }

        .info h3 {
            margin: 0;
            font-size: 1.2em;
        }

        .info p {
            margin: 5px 0;
            font-size: 0.9em;
            color: #555;
        }

        /* Estilos para la info extra */
        .info-extra {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transform: scale(0.8);
            transition: opacity 0.3s ease, transform 0.3s ease;
        }

        .cirujano:hover .info-extra {
            opacity: 1;
            transform: scale(1);
        }

        /* Iconos de redes sociales */
        .info-extra a {
            color: white;
            text-decoration: none;
            margin: 5px;
            font-size: 1.2em;
            transition: color 0.3s ease;
        }

        .info-extra a:hover {
            color: #ffcc00;
        }

        @media (max-width: 768px) {
            .cirujano {
                flex-direction: column;
                text-align: center;
            }

            .cirujano-imagen img {
                width: 100px;
                height: 100px;
            }
        }
        /* Contenedor principal */
        .contacto-container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 20px;
            padding: 40px;
        }

        /* Formulario */
        .formulario-contacto {
            width: 45%;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        .formulario-contacto form {
            display: flex;
            flex-direction: column;
        }

        .formulario-contacto input,
        .formulario-contacto textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .formulario-contacto button {
            padding: 10px;
            background: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        /* Información del Local */
        .info-local p {
            margin: 10px 0;
            font-size: 14px;
        }

        /* Comentarios */
        .comentarios-container {
            width: 45%;
            background: #f8f8f8;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        #comentarios {
            height: 200px;
            overflow: hidden;
            position: relative;
            flex-direction: column-reverse; /* Los nuevos comentarios aparecen arriba */
        }

        .comentario {
            background: #fff;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            animation: subir 10s linear forwards;
        }

        /* Modals */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .modal-content {
            background-color: #fff;
            margin: 10% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 500px;
            text-align: center;
            border-radius: 8px;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }

    /* Animación para que los comentarios suban y desaparezcan */
    @keyframes subir {
        0% { opacity: 0; transform: translateY(30px); }
        10% { opacity: 1; transform: translateY(0px); }
        90% { opacity: 1; }
        100% { opacity: 0; transform: translateY(-30px); }
        }

    </style>
    <!-- Icono de la web -->
    <link rel="icon" href="Imagenes/Logo.jpg" type="image/x-icon">
</head>
<body class="dark-theme">
    <?php include 'Utilities/nav.php'; ?>

    <div class="content">
        <?php 
        $page = isset($_GET['page']) ? $_GET['page'] : 'sobre-nosotros';
        switch ($page) {
            case 'servicios':
                include 'Pages/servicios.php';
                break;
            case 'cirujanos':
                include 'Pages/cirujanos.php';
                break;
            case 'contacto':
                include 'Pages/contactanos.php';
                break;
            case 'sobre-nosotros':
            default:
                include 'Pages/sobre-nosotros.php';
                break;
        }
        ?>
    </div>
    
    <?php include 'Utilities/footer.php';?>
    
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const animatedElements = document.querySelectorAll('.animate-fade-in');
            animatedElements.forEach(element => {
                element.classList.add('animate-fade-in');
            });
        });
    </script>
    <script src="/WebDoctoresQuiro/Js/scripts.js"></script>
    <?php include 'Utilities/footer.php';?>
</body>
</html>