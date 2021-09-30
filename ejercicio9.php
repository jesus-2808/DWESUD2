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
    echo $_SERVER['PHP_SELF'];
    print "<br>";
    echo $_SERVER['SERVER_ADDR'];
    print "<br>";
    echo $_SERVER['SERVER_NAME'];
    print "<br>";
    echo $_SERVER['DOCUMENT_ROOT'];
    print "<br>";
    echo $_SERVER['REMOTE_ADDR'];
    print "<br>";
    echo $_SERVER['REQUEST_METHOD'];
    print "<br>";
    function prueba()
{
   static $local=null;
   global $global;
   $var1=null;
   

}
    echo $local;
    print "<br>";
    echo $global;
    print "<br>";
    echo $var1;
    ?>
</body>
</html>