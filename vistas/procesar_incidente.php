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
            font-family: 'Roboto', Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f2f5;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .ficha {
            background: #fff;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 450px;
            width: 100%;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .ficha:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }
        h1 {
            font-size: 24px;
            color: #007bff;
            text-align: center;
            margin-bottom: 20px;
        }
        .info {
            margin-bottom: 15px;
        }
        .info label {
            font-weight: bold;
            font-size: 14px;
            display: block;
            margin-bottom: 5px;
            color: #555;
        }
        .info p {
            margin: 0;
            padding: 10px;
            background: #f9f9f9;
            border: 1px solid #e0e0e0;
            border-radius: 6px;
            font-size: 14px;
            color: #333;
        }
        .info p:hover {
            background: #eef2f7;
            border-color: #d0d7e0;
        }
        .fecha-hora {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #666;
        }
        .fecha-hora p {
            margin: 5px 0;
        }
        @media (max-width: 500px) {
            .ficha {
                padding: 20px;
                border-radius: 8px;
            }
            h1 {
                font-size: 20px;
            }
            .info p {
                font-size: 13px;
            }
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
            <p><strong>Fecha:</strong> <?= htmlspecialchars($fecha_actual) ?></p>
            <p><strong>Hora:</strong> <?= htmlspecialchars($hora_actual) ?></p>
        </div>
    </div>
</body>
</html>
