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

    <h2>Pagina Principal</h2>
    <p><?php echo $descripcion; ?></p>

    <h3>Sobre este blog</h3>
    <p>En este espacio comparto mis conocimientos sobre programacion, desarrollo web y tecnologia.</p>
    <p>Soy estudiante de Ingenieria en Sistemas Informaticos en la Universidad Nacional de El Salvador.</p>

    <h3>Secciones disponibles</h3>
    <ul>
        <li><strong>Inicio:</strong> Informacion personal y profesional</li>
        <li><strong>Mi lenguaje favorito:</strong> Por que Python es mi lenguaje preferido</li>
        <li><strong>Contactar:</strong> Formulario de contacto con validaciones</li>
    </ul>

    <footer>
        <p>Desarrollado con PHP siguiendo el patron MVC</p>
        <p>Jasson Armando Gomez Guevara - TJson</p>
    </footer>
</body>
</html>