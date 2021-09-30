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
   $baseTriangulo = 7;
   $alturaTriangulo= 2;
   $baseCuadrado = 3;
   $alturaCuadrado=6;
   $diagonalMayorRombo=5;
   $diagonalMenorRombo=3;
   $areaTriangulo=(($baseTriangulo*$alturaTriangulo)/2);
   $areaCuadrado=($baseCuadrado*$alturaCuadrado);
   $areaRombo=($diagonalMayorRombo*$diagonalMenorRombo)/2;
   define("PI", 3.14159);
   $rCirculo=4;
   $areaCirculo=(PI*($rCirculo*$rCirculo));


   echo "el area de este triangulo es: $areaTriangulo";

   print "<br>";

   echo "el area de este cuadrado es: $areaCuadrado";

   print "<br>";

   echo "el area de este rombo es: $areaRombo";

   print "<br>";


    print "<br>";

    echo "el area del circulo de radio $rCirculo es: $areaCirculo";
    ?>
</body>
</html>