<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alojamiento Digital - Administrador</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .personal {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
            border-bottom: 1px solid #cccccc;
        }

        .habitaciones {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            padding: 20px 0;
        }

        .habitacion {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            background-color: #e9e9e9;
            border-radius: 5px;
        }

        .agregar-personal {
            margin-top: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .agregar-personal input[type="text"],
        .agregar-personal input[type="number"] {
            width: 150px;
            padding: 5px;
            margin-right: 10px;
        }

        .agregar-personal button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Alojamiento Digital - Administrador</h1>
        <h2>Personal</h2>
        <div class="personal">
            <div>
                <p>Nombre: <input type="text" name="nombre" id="nombre"></p>
                <p>Apellido: <input type="text" name="apellido" id="apellido"></p>
                <p>Correo: <input type="text" name="correo" id="correo"></p>
                <p>Cargo: <input type="text" name="cargo" id="cargo"></p>
            </div>
            <div>
            </div>
        </div>
        <h2>Lista de Habitaciones</h2>
        <div class="habitaciones">
            <div class="habitacion">
                <p>Número de Habitación: 1</p>
                <p>Estado: Disponible</p>
            </div>
            <div class="habitacion">
                <p>Número de Habitación: 2</p>
                <p>Estado: Ocupada</p>
            </div>
            <div class="habitacion">
                <p>Número de Habitación: 3</p>
                <p>Estado: Disponible</p>
            </div>
        </div>
        <h2>Agregar Habitacion</h2>
        <div class="agregar-personal">
            <p>Número de Habitación:</p>
            <input type="number" name="habitacion" id="habitacion">
            <button>Agregar</button>
        </div>
    </div>
</body>
</html>
