<?php
// Capturar los datos enviados desde el formulario
$laboratorio = $_POST['laboratorio'] ?? 'No especificado';
$materia = $_POST['materia'] ?? 'No especificada';
$infractor = $_POST['infractor'] ?? 'No';
$tipo_fallo = $_POST['tipo_fallo'] ?? 'No especificado';
$observacion = $_POST['observacion'] ?? 'Sin observaciones';
$cedula_infractor = $_POST['cedula_infractor'] ?? 'No especificada';
$nombre_infractor = $_POST['nombre_infractor'] ?? 'No especificado';

// Obtener la fecha y hora actual
date_default_timezone_set('America/Guayaquil'); // Ajusta la zona horaria según tu ubicación
$fecha_actual = date('d/m/Y'); // Día, mes y año
$hora_actual = date('h:i A'); // Hora en formato 12 horas con AM/PM

//activamos almacenamiento en el buffer
ob_start();
session_start();

if (!isset($_SESSION['usu_nombre'])) {
    header("Location: login.html");
    exit;
} else {
    require 'header.php';
    if ($_SESSION['Acceso'] == 1) {
        ?>
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Ficha de Incidente</title>
            <style>
    .ficha {
        background: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        max-width: 600px; /* Ajustar ancho máximo */
        width: 100%;
        margin: 0 auto; /* Centrar la ficha */
    }
    h1 {
        font-size: 24px; /* Aumentar tamaño de fuente */
        color: #007bff;
        text-align: center;
    }
    .info {
        margin-bottom: 20px; /* Aumentar separación */
    }
    .info label {
        font-weight: bold;
    }
    .info p {
        margin: 5px 0;
        padding: 10px; /* Aumentar espaciado interno */
        background: #f8f9fa;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 16px; /* Aumentar tamaño de fuente */
    }
    .fecha-hora {
        text-align: center;
        margin-top: 15px;
        font-size: 14px;
        color: #555;
    }
</style>

        </head>
        <body>
            <div class="ficha">
                <h1>Ficha de Incidente</h1>
                <div class="info">
                    <label>Laboratorio:</label>
                    <p><?= htmlspecialchars($laboratorio) ?></p>
                </div>
                <div class="info">
                    <label>Materia:</label>
                    <p><?= htmlspecialchars($materia) ?></p>
                </div>
                <div class="info">
                    <label>¿Conocimiento de Infractor?</label>
                    <p><?= htmlspecialchars($infractor) ?></p>
                </div>
                <?php if (strtolower($infractor) === 'si'): ?>
                <div class="info">
                    <label>Cédula del Infractor:</label>
                    <p><?= htmlspecialchars($cedula_infractor) ?></p>
                </div>
                <div class="info">
                    <label>Nombre del Infractor:</label>
                    <p><?= htmlspecialchars($nombre_infractor) ?></p>
                </div>
                <?php endif; ?>
                <div class="info">
                    <label>Tipo de Fallo:</label>
                    <p><?= htmlspecialchars($tipo_fallo) ?></p>
                </div>
                <div class="info">
                    <label>Observación:</label>
                    <p><?= htmlspecialchars($observacion) ?></p>
                </div>
                <div class="fecha-hora">
                    <p><strong>Fecha:</strong> <?= $fecha_actual ?></p>
                    <p><strong>Hora:</strong> <?= $hora_actual ?></p>
                </div>
            </div>
        </body>
        </html>
        <?php
    } else {
        require 'noacceso.php';
    }
    require 'footer.php';
}
ob_end_flush();
?>
