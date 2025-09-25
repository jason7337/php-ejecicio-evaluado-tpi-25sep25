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

    <h2>Formulario de Contacto</h2>

    <?php if(isset($procesado) && $procesado): ?>
        <?php if(empty($errores)): ?>
            <h3>¡Formulario enviado correctamente!</h3>
            <p>Datos validados:</p>
            <ul>
                <li><strong>Correo:</strong> <?php echo $correo; ?></li>
                <li><strong>Telefono:</strong> <?php echo $telefono; ?></li>
                <li><strong>DUI:</strong> <?php echo $dui; ?></li>
            </ul>
            <p>Gracias por contactarme. Te respondere pronto.</p>
        <?php else: ?>
            <h3>Errores en el formulario:</h3>
            <ul>
                <?php foreach($errores as $error): ?>
                    <li style="color: red;"><?php echo $error; ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <hr>
    <?php endif; ?>

    <h3>Completa el siguiente formulario</h3>
    <p>Todos los campos son obligatorios y deben cumplir el formato salvadoreño.</p>

    <form action="/contactar" method="POST">
        <table>
            <tr>
                <td><label for="correo">Correo electronico:</label></td>
                <td>
                    <input type="text" id="correo" name="correo"
                           value="<?php echo isset($correo) ? $correo : ''; ?>"
                           placeholder="ejemplo@correo.com" required>
                </td>
            </tr>
            <tr>
                <td><label for="telefono">Numero de telefono:</label></td>
                <td>
                    <input type="text" id="telefono" name="telefono"
                           value="<?php echo isset($telefono) ? $telefono : ''; ?>"
                           placeholder="2XXX-XXXX, 6XXX-XXXX o 7XXX-XXXX" required>
                </td>
            </tr>
            <tr>
                <td><label for="dui">Numero de DUI:</label></td>
                <td>
                    <input type="text" id="dui" name="dui"
                           value="<?php echo isset($dui) ? $dui : ''; ?>"
                           placeholder="12345678-9" required>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Enviar formulario">
                </td>
            </tr>
        </table>
    </form>

    <h3>Formatos requeridos</h3>
    <ul>
        <li><strong>Correo:</strong> formato valido de email</li>
        <li><strong>Telefono:</strong> debe empezar con 2, 6 o 7 seguido de XXX-XXXX</li>
        <li><strong>DUI:</strong> 8 digitos, guion, 1 digito (formato: 12345678-9)</li>
    </ul>

    <h3>Otras formas de contacto</h3>
    <ul>
        <li><strong>Email directo:</strong> gomezjason010@gmail.com</li>
        <li><strong>Telefono:</strong> +50375025302</li>
        <li><strong>Portafolio:</strong> <a href="https://tjson.net" target="_blank">tjson.net</a></li>
        <li><strong>GitHub:</strong> <a href="https://github.com/jason7337" target="_blank">jason7337</a></li>
    </ul>

    <footer>
        <p>Desarrollado con PHP siguiendo el patron MVC</p>
        <p>Jasson Armando Gomez Guevara - TJson</p>
    </footer>
</body>
</html>