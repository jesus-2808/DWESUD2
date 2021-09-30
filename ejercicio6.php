<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=ç, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $operaciones_diarias="4";
    $operaciones_semanales="13";
    define("MAX_OPER_DIA", "6");
    define("MAX_OPER_SEMANA", "30");
    echo"el numero de operaciones diarias es menor o igual al maximo " , var_export($operaciones_diarias >= $MAX_OPER_DIA);
    print "<br>";
    echo "el numero de operaciones semanales es mayor o igual al maximo " , var_export($operaciones_semanales >= $MAX_OPER_SEMANA);
    print "<br>";
    echo "el numero de operaciones diarias identico al maximo " , var_export($operaciones_diarias === $MAX_OPER_DIA);
    print "<br>";
    echo "el numero de operaciones semanales es mayor o igual al maximo " , var_export($operaciones_semanales >= $MAX_OPER_SEMANA);
    print "<br>";
    echo "el numero de operaciones diarias es distinto al de operaciones semanales " , var_export($operaciones_diarias != $operaciones_semanales);
   
        
    ?>
</body>
</html>