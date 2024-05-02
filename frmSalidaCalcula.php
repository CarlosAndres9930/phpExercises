<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Calculadora</h1>
    <?php
    if($_POST["Valor1"]!=""and $_POST["Valor2"]!=""){
        if($_POST["operador"]=="suma"){
            print($resultado = $_POST["Valor1"]+$_POST["Valor2"]);
            print('<br><a href="calculadora.php">Volver</a>');
        }elseif ($_POST["operador"]=="resta") {
            print($resultado = $_POST["Valor1"]-$_POST["Valor2"]);
            print('<br><a href="calculadora.php">Volver</a>');
        }elseif ($_POST["operador"]=="multi") {
            print($resultado = $_POST["Valor1"]*$_POST["Valor2"]);
            print('<br><a href="calculadora.php">Volver</a>');
        }elseif ($_POST["operador"]=="div") {
            print($resultado = $_POST["Valor1"]/$_POST["Valor2"]);
            print('<br><a href="calculadora.php">Volver</a>');
        }
    }else{
        print("Se debe ingresar los valores");
        print('<br><a href="calculadora.php">Volver</a>');
    }
       
    ?>
    
</body>
</html>