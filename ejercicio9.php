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
    echo "ruta para la ejecución del codigo: ", $_SERVER['PHP_SELF']; 
    print "<br>";
    echo "ip del servidor : ", $_SERVER['SERVER_ADDR'];
    print "<br>";
    echo "nombre del servidor: ", $_SERVER['SERVER_NAME'];
    print "<br>";
    echo "carpeta del documento : ",  $_SERVER['DOCUMENT_ROOT'];
    print "<br>";
    echo  "ip del servidor remoto : " ,$_SERVER['REMOTE_ADDR'];
    print "<br>";
    echo "metodo de solicitud : ", $_SERVER ['REQUEST_METHOD'];
    print "<br>";
    function prueba()
{
   static $local=null;
   echo $GLOBALS["foo"];
   $var1=1;
   

}
    echo $local;
    print "<br>";
    echo $GLOBALS; //marca array
    print "<br>";
    echo $var1; //no te muestra la variable
    ?>
</body>
</html>