<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   
   $precioPantalon=29.99;
   $pantalonesComprados=3;
   $precioCamisa=25.99;
   $camisasCompradas=2;
   define("DESCUENTO", 8);
   $totalSinDescuento=($precioPantalon*$pantalonesComprados)+($precioCamisa*$camisasCompradas);
   $totalConDescuento=($totalSinDescuento-($totalSinDescuento*DESCUENTO/100));

   printf ("El precio de un pantalon es de %.2f ", $precioPantalon);

   print "<br>";

   printf ("El precio de una camisa es de %.2f ", $precioCamisa);

   print "<br>";

   printf ("El total sin descuento es de %.2f", $totalSinDescuento);

   print "<br>";

   printf ("El total con descuento es de %.3f", $totalConDescuento);


   ?>
</body>
</html>