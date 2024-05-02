<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Leeremos dos números y los comparamos</h1>
    <?php
      $num1=$_POST['num1'];
      $num2=$_POST['num2'];
      if($num1==$num2)
      {
        $mensaje="Iguales";
      }
      else{
        $mensaje="Son diferentes";
      }    
    ?>
    Los numeros son: <?php echo $mensaje; ?>
   

</body>
</html>