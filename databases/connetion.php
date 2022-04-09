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
    echo "connecting to MYSQL database";
    $servername="localhost";
    $username="naeem";
    $password="Navjivan@123";
    $db="naeem";

    $con=mysqli_connect($servername,$username,$password,$db);

    if(!$con)
    {
        die("ERROR!");
    }
    else
    {
        echo "<br>Connection successfull";
    }
    echo "<br><br>";
    // print_r($con);
    
    
    
    $q="SELECT * FROM userdetails";
    mysqli_query($con,$q);
    if(!$con)
    {
        die("ERROR! ".mysqli_error($con));
    }
  
    ?>
</body>
</html>