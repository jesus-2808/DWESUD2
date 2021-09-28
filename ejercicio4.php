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
   
  $zapatos=45.99;
   $descuentoZapatos=0.88;


   printf ("El precio de un pantalon es de %.2f ", $precioPantalon);

   print "<br>";

   printf ("El precio de una camisa es de %.2f ", $precioCamisa);


   print "<br>";

   printf ("El precio de un par de zapatos es de %.2f ", $zapatos);

   print "<br>";

 
   $zapatosconDescuento=($zapatos*=$descuentoZapatos);
   
   printf ("El precio de los zapatos con descuento es de %.2f", $zapatosconDescuento);

   $totalSinDescuento=($precioPantalon*$pantalonesComprados)+($precioCamisa*$camisasCompradas);

    
   print "<br>";

   $totalConDescuento=($totalSinDescuento-($totalSinDescuento*DESCUENTO/100))+$zapatosconDescuento;


   printf ("El precio total de la cesta es %.2f", $totalConDescuento);



   ?>
</body>
</html>