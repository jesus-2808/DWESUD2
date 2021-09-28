<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border ="1" width="30%">
        <caption>Tabla de verdad de operador AND</caption>
        <td>variable1</td> 
        <td> variable2</td>
        <td> variable3</td>
        <td> Resultado</td>

    <?php

  $variable1=true;
  $variable2=true;
  $variable3=true;


    ?>

<tr>
<td><?php var_export($variable1);?></td>
<td><?php var_export($variable2);?></td>
<td><?php var_export($variable3);?></td>
<td><?php var_export($variable1 && $variable2 && $variable3);?></td>

</tr>
       
<?php

$variable1=true;
$variable2=true;
$variable3=false;


  ?> 

<tr>
<td><?php var_export($variable1);?></td>
<td><?php var_export($variable2);?></td>
<td><?php var_export($variable3);?></td>
<td><?php var_export($variable1 && $variable2 && $variable3);?></td>

</tr>

<?php

$variable1=true;
$variable2=false;
$variable3=false;


  ?> 

<tr>
<td><?php var_export($variable1);?></td>
<td><?php var_export($variable2);?></td>
<td><?php var_export($variable3);?></td>
<td><?php var_export($variable1 && $variable2 && $variable3);?></td>

</tr>

<?php

$variable1=false;
$variable2=false;
$variable3=true;


  ?> 

<tr>
<td><?php var_export($variable1);?></td>
<td><?php var_export($variable2);?></td>
<td><?php var_export($variable3);?></td>
<td><?php var_export($variable1 && $variable2 && $variable3);?></td>

</tr>

<?php

$variable1=false;
$variable2=true;
$variable3=false;


  ?> 

<tr>
<td><?php var_export($variable1);?></td>
<td><?php var_export($variable2);?></td>
<td><?php var_export($variable3);?></td>
<td><?php var_export($variable1 && $variable2 && $variable3);?></td>

</tr>

<?php

$variable1=true;
$variable2=false;
$variable3=true;


  ?> 
    
    <tr>
<td><?php var_export($variable1);?></td>
<td><?php var_export($variable2);?></td>
<td><?php var_export($variable3);?></td>
<td><?php var_export($variable1 && $variable2 && $variable3);?></td>

</tr>

<?php

$variable1=false;
$variable2=true;
$variable3=true;


  ?> 

<tr>
<td><?php var_export($variable1);?></td>
<td><?php var_export($variable2);?></td>
<td><?php var_export($variable3);?></td>
<td><?php var_export($variable1 && $variable2 && $variable3);?></td>

</tr>

<?php

$variable1=false;
$variable2=false;
$variable3=false;


  ?> 
<tr>
<td><?php var_export($variable1);?></td>
<td><?php var_export($variable2);?></td>
<td><?php var_export($variable3);?></td>
<td><?php var_export($variable1 && $variable2 && $variable3);?></td>

<?php

  $variable1=true;
  $variable2=true;
  $variable3=true;


    ?>

<tr>
<td><?php var_export($variable1);?></td>
<td><?php var_export($variable2);?></td>
<td><?php var_export($variable3);?></td>
<td><?php var_export($variable1 || $variable2 || $variable3);?></td>

</tr>
       
<?php

$variable1=true;
$variable2=true;
$variable3=false;


  ?> 

<tr>
<td><?php var_export($variable1);?></td>
<td><?php var_export($variable2);?></td>
<td><?php var_export($variable3);?></td>
<td><?php var_export($variable1 || $variable2 || $variable3);?></td>

</tr>

<?php

$variable1=true;
$variable2=false;
$variable3=false;


  ?> 

<tr>
<td><?php var_export($variable1);?></td>
<td><?php var_export($variable2);?></td>
<td><?php var_export($variable3);?></td>
<td><?php var_export($variable1 || $variable2 || $variable3);?></td>

</tr>

<?php

$variable1=false;
$variable2=false;
$variable3=true;


  ?> 

<tr>
<td><?php var_export($variable1);?></td>
<td><?php var_export($variable2);?></td>
<td><?php var_export($variable3);?></td>
<td><?php var_export($variable1 || $variable2 || $variable3);?></td>

</tr>

<?php

$variable1=false;
$variable2=true;
$variable3=false;


  ?> 

<tr>
<td><?php var_export($variable1);?></td>
<td><?php var_export($variable2);?></td>
<td><?php var_export($variable3);?></td>
<td><?php var_export($variable1 || $variable2 || $variable3);?></td>

</tr>

<?php

$variable1=true;
$variable2=false;
$variable3=true;


  ?> 
    
    <tr>
<td><?php var_export($variable1);?></td>
<td><?php var_export($variable2);?></td>
<td><?php var_export($variable3);?></td>
<td><?php var_export($variable1 || $variable2 || $variable3);?></td>

</tr>

<?php

$variable1=false;
$variable2=true;
$variable3=true;


  ?> 

<tr>
<td><?php var_export($variable1);?></td>
<td><?php var_export($variable2);?></td>
<td><?php var_export($variable3);?></td>
<td><?php var_export($variable1 || $variable2 || $variable3);?></td>

</tr>

<?php

$variable1=false;
$variable2=false;
$variable3=false;


  ?> 
<tr>
<td><?php var_export($variable1);?></td>
<td><?php var_export($variable2);?></td>
<td><?php var_export($variable3);?></td>
<td><?php var_export($variable1 || $variable2 || $variable3);?></td>


</tr>
</body>
</html>