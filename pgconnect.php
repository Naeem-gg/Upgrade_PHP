<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pg connect</title>
</head>
<body>
    <?php
    $host="host= localhost";
    $port="port=5432";
    $detail="user=tybcs password=root";
    $db="dbname=bcs";
    $x=pg_connect("$host $port $db $detail");
    if(!$x)
    {
        echo "error";
    }
    else
    {
        echo "connection successfull";
    }
    ?>
</body>
</html>