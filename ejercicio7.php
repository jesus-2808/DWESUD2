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
    $num1= 15;
    $num2=10;

    printf ("El valor binario de $num1 es:  %b", $num1);
    print "<br>";
    printf ("El valor binario de $num2 es:  %b", $num2);
    print "<br>";
    printf ("El resultado de la operacion de comparacion and bit a bit  es:  %b", $num1 & $num2);
    print "<br>";
    printf ("El resultado de la operacion de comparacion not bit a bit  es:  %b", ~ $num2);
    print "<br>";
    printf ("El resultado de la operacion de comparacion not bit a bit  es:  %b", ~ $num1);
    print "<br>";
    printf ("El resultado de la operacion de comparacion 0R bit a bit  es:  %b", $num1 | $num2);
    print "<br>";
    printf ("El resultado de la operacion de comparacion X0R bit a bit  es:  %b", $num1 ^ $num2);
    ?>
</body>
</html>