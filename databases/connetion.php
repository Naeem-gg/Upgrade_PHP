<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database connection</title>
</head>
<body>
    <?php
    // echo "connecting to MYSQL database";
    $servername="localhost";
    $username="naeem";
    $password="Navjivan";
    $db="naeem";
    try 
    {
        $con= new mysqli($servername,$username,$password,$db);
        if($con->connect_error)
        {
            die("ERROR! while connecting $db ".$con->connect_error);
        }
    }
     catch (Exception $th) 
     {
        echo $th->getMessage();
    }
    
  
    ?>
</body>
</html>