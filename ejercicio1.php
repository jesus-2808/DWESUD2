<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola Mundo</title>
</head>
<body>
 <?php 
 $miNombre="Jesus";
 $miEdad=31;
 $miPoblacion="Dos Hermanas";

 echo "Soy $miNombre, tengo $miEdad años y vivo en $miPoblacion";

 print "<br>";
 
 printf ("%s tiene %d años y vive en %s", $miNombre, $miEdad, $miPoblacion);
 ?>
 </body>
</html>