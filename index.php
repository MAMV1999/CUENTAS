<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuenta</title>
    <script src="js/Cuenta.js" defer></script>
</head>
<body>
    <h1>Cuenta</h1>
    <form action="Controller/Cuenta.php" method="POST">
        <label for="observacion">Observación:</label>
        <input type="text" id="observacion" name="observacion" required>
        <br>
        <label for="tipo">Tipo:</label>
        <select id="tipo" name="tipo" required>
            <option value="ingreso">Ingreso</option>
            <option value="salida">Salida</option>
        </select>
        <br>
        <label for="monto">Monto:</label>
        <input type="number" id="monto" name="monto" required>
        <br>
        <button type="submit">Guardar</button>
    </form>
    <h2>Lista de Observaciones</h2>
    <table border="1">
        <thead>
            <tr>
                <th>Observación</th>
                <th>Tipo</th>
                <th>Monto</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody id="observaciones-list">
            <!-- Las observaciones se agregarán aquí -->
        </tbody>
    </table>
</body>
</html>
