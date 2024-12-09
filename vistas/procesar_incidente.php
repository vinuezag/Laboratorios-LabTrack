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

// Mostrar la ficha con la información
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha de Incidente</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .ficha {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        h1 {
            font-size: 20px;
            color: #007bff;
            text-align: center;
        }
        .info {
            margin-bottom: 15px;
        }
        .info label {
            font-weight: bold;
        }
        .info p {
            margin: 5px 0;
            padding: 5px;
            background: #f8f9fa;
            border: 1px solid #ddd;
            border-radius: 4px;
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
        <?php if ($infractor === 'si'): ?>
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
