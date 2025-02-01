<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Conoce más sobre Tseung Kwan O Trading, una empresa transnacional líder en comercio internacional de productos.">
    <title>Sobre Nosotros - Tseung Kwan O Trading (TKO)</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <script src="script.js"></script>
</head>
<script src="script.js"></script>
<body>
    <div class="content-wrapper">
    <header>
        <img src="logo.png" alt="TKO Trading Logo">
        <h1>Libro de Reclamaciones</h1>
    </header>
    <nav>
        <a href="index.html">Inicio</a>
        <a href="about.html">Sobre Nosotros</a>
        <a href="products.html">Productos</a>
        <a href="contact.html">Contacto</a>
    </nav>

        <section id="libro-reclamaciones">
            <form action="procesar-reclamo.php" method="post">
                <label for="nombre">Nombre Completo:(*)</label>
                <input type="text" id="nombre" name="nombre" required>

                <label for="dni">DNI / CE:(*)</label>
                <input type="text" id="dni" name="dni" required>

                <label for="correo">Correo Electrónico:(*)</label>
                <input type="email" id="correo" name="correo" required>

                <label for="telefono">Teléfono:</label>
                <input type="tel" id="telefono" name="telefono" required>

                <label for="tipo">Tipo de Reclamo:(*)</label>
                <select id="tipo" name="tipo" required>
                    <option value="reclamo">Reclamo (Mal servicio o producto)</option>
                    <option value="queja">Queja (Malestar general, sin requerir solución)</option>
                </select>

                <label for="detalle">Detalle del Reclamo:(*)</label>
                <textarea id="detalle" name="detalle" rows="5" required></textarea>

                <label>
                    <input type="checkbox" required> Confirmo que la información es correcta y acepto los <a href="terminos.html" target="_blank">Términos y Condiciones</a>.
                </label>

                <button type="submit">Enviar Reclamo</button>
            </form>
<p><strong>IMPORTANTE:</strong> En caso que el consumidor no consigne como mínimo su nombre, DNI, domicilio o correo electrónico, fecha del reclamo o queja, y el detalle de los mismos, éstos se considerarán como no presentados (art 5 D.S. 006-2014-PCM).</p>
                    <p>El proveedor deberá dar respuesta al reclamo o queja en un plazo no mayor de quince (15) días hábiles, el cual es improrrogable. La formulación del reclamo no impide acudir a otras vías de solución de controversias ni es requisito previo para interponer una denuncia ante el INDECOPI.</p>
                    <p>Se le informa que sus datos serán almacenados en el banco de "Quejas y Reclamos" de titularidad TSEUNG KWAN O TRADING S.A.C. por un plazo indeterminado, a fin de dar respuesta a sus quejas y reclamos, así como llevar un registro de los mismos con el propósito de cumplir con las normas de protección al consumidor. Las demás condiciones de tratamiento de sus datos personales, los terceros destinatarios a sus datos personales, así como el mecanismo para ejercer sus derechos ARCO se encuentran detallados en el siguiente enlace: <a href="politicas-de-privacidad.html" target="_blank">Políticas de privacidad</a>.</p>
        </div>
    <footer>
        <p>&copy; 2025 Tseung Kwan O Trading. Todos los derechos reservados.</p>
    <a href="terminos.html">Términos y Condiciones</a>
    <a href="libro-reclamaciones.html">Libro de Reclamaciones</a>
    </footer>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $dni = $_POST["dni"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $tipo = $_POST["tipo"];
    $detalle = $_POST["detalle"];

    $mensaje = "Nuevo Reclamo:\n\nNombre: $nombre\nDNI: $dni\nCorreo: $correo\nTeléfono: $telefono\nTipo: $tipo\nDetalle: $detalle";
    
    // Enviar el correo (reemplaza con tu email)
    mail("ventas@tseungkwanotrading.com", "Nuevo Reclamo - TKO Trading", $mensaje);

    // Redirigir a una página de confirmación
    //header("Location: confirmacion.html");
}
?>
</body>
</html>