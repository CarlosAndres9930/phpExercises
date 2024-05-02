<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
<form action="frmSalidaCalcula.php" method="post">
    <select name="operador">
        <option value="suma">Suma</option>
        <option value="resta">Resta</option>
        <option value="multi">Multiplicación</option>
        <option value="div">División</option>

    </select><br>
    <p>Introduce el primer número</p>
    <input type="text" name="Valor1"><br><br>
    <input type="text" name="Valor2"><br><br>

    <input type="submit" name="Enviar">
    <input type="reset" name="Borrar">
        
    </form>
</body>
</html>