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

    <h2>Mi Lenguaje de Programacion Favorito</h2>

    <h3>Lenguaje Principal: <?php echo $lenguaje_principal; ?></h3>
    <p><strong>¿Por que es mi favorito?</strong></p>
    <p><?php echo $razon; ?></p>

    <h3>Ventajas de Python</h3>
    <ul>
        <li>Sintaxis clara y legible</li>
        <li>Gran comunidad y documentacion</li>
        <li>Amplio ecosistema de librerias</li>
        <li>Versatil: web, datos, IA, automatizacion</li>
        <li>Ideal para prototipado rapido</li>
        <li>Excelente para microservicios</li>
    </ul>

    <h3>Otros lenguajes que uso</h3>
    <ul>
        <?php foreach($otros_lenguajes as $lenguaje): ?>
            <li><?php echo $lenguaje; ?></li>
        <?php endforeach; ?>
    </ul>

    <h3>Tecnologias y frameworks</h3>
    <ul>
        <?php foreach($tecnologias as $tecnologia): ?>
            <li><?php echo $tecnologia; ?></li>
        <?php endforeach; ?>
    </ul>

    <h3>Proyectos con Python</h3>
    <p>He desarrollado varios proyectos usando Python:</p>
    <ul>
        <li>APIs RESTful con Flask y Django</li>
        <li>Sistemas de microservicios</li>
        <li>Automatizacion de tareas</li>
        <li>Aplicaciones web full stack</li>
        <li>Integracion con bases de datos</li>
    </ul>

    <h3>¿Por que recomiendo Python?</h3>
    <p>Python es ideal para principiantes por su sintaxis sencilla, pero tambien es suficientemente potente para proyectos empresariales complejos.</p>
    <p>Su filosofia "codigo limpio y legible" coincide perfectamente con las buenas practicas de desarrollo de software.</p>

    <footer>
        <p>Desarrollado con PHP siguiendo el patron MVC</p>
        <p>Jasson Armando Gomez Guevara - TJson</p>
    </footer>
</body>
</html>