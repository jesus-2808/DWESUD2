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
    $var1="2.3";
    $var2="4abxcb";
    echo("comprobaciones de $var1");
    print "<br>";
    echo gettype ($var1);
  
    print "<br>";
    echo "es string?", var_export (is_string($var1));
    echo is_float($var1);
    print "<br>";
    echo "es float?", var_export (is_float($var1));
    print "<br>";
    echo "es integer?", var_export (is_integer($var1));
    print "<br>";
    settype($var1, "double");
    print "<br>";
    echo("el nuevo tipo de dato es $var1");
    print "<br>";
    echo gettype ($var1);
    print "<br>";
    settype($var1, "integer");
    print "<br>";
    echo gettype ($var1);
    print "<br>";
    echo "es string?", var_export (is_string($var1));
    echo is_float($var1);
    print "<br>";
    echo "es float?", var_export (is_float($var1));
    print "<br>";
    echo "es integer?", var_export (is_integer($var1));
    print "<br>";
    
    echo ($var1);
    print "<br>";
    echo ($var2);
    print "<br>";
    settype($var2, "integer");
    echo ("nueva variable $var2");
    print "<br>";
    ?>
</body>
</html>