<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo; ?></title>
</head>
<body>
    <h1>Blog Personal - Jasson Gomez</h1>

    <nav>
        <ul>
            <li><a href="/">Inicio</a></li>
            <li><a href="/inicio">Acerca de mi</a></li>
            <li><a href="/lenguaje">Mi lenguaje favorito</a></li>
            <li><a href="/contactar">Contactar</a></li>
        </ul>
    </nav>

    <h2>Acerca de mi - Perfil Personal</h2>

    <h3>Informacion Personal</h3>
    <ul>
        <li><strong>Nombre:</strong> <?php echo $nombre; ?></li>
        <li><strong>Alias:</strong> <?php echo $alias; ?></li>
        <li><strong>DUI:</strong> <?php echo $dui; ?></li>
        <li><strong>Ubicacion:</strong> <?php echo $ubicacion; ?></li>
    </ul>

    <h3>Informacion Academica y Profesional</h3>
    <ul>
        <li><strong>Profesion:</strong> <?php echo $profesion; ?></li>
        <li><strong>Universidad:</strong> <?php echo $universidad; ?></li>
        <li><strong>Experiencia:</strong> <?php echo $experiencia; ?></li>
    </ul>

    <h3>Informacion de Contacto</h3>
    <ul>
        <li><strong>Email:</strong> <?php echo $email; ?></li>
        <li><strong>Telefono:</strong> <?php echo $telefono; ?></li>
        <li><strong>Portafolio:</strong> <a href="https://tjson.net" target="_blank">tjson.net</a></li>
        <li><strong>GitHub:</strong> <a href="https://github.com/jason7337" target="_blank">jason7337</a></li>
    </ul>

    <h3>Sobre mi</h3>
    <p>Soy un estudiante apasionado por la tecnologia y el desarrollo de software. Me especializo en desarrollo web full stack con enfoque en Python y JavaScript.</p>
    <p>Actualmente estudio Ingenieria en Sistemas Informaticos y trabajo en proyectos personales para ampliar mis conocimientos.</p>
    <p>Mi objetivo es convertirme en un desarrollador senior y contribuir al crecimiento de la industria tecnologica en El Salvador.</p>

    <footer>
        <p>Desarrollado con PHP siguiendo el patron MVC</p>
        <p>Jasson Armando Gomez Guevara - TJson</p>
    </footer>
</body>
</html>