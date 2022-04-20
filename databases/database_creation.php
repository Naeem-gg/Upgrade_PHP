<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creation and deletion database</title>
</head>
<body>
        <form method='POST'>
            <strong>Enter Database Name:</strong>
            <input type="text" size=20 name="mydata" >
            <input type="submit" value="Create" name="create">
            <input type="submit" value="Delete" name="drop">
        </form>
        <?php

        $server="localhost";
        $user="root";
        $pass="";
        $db=$_POST['mydata'];
        $con=mysqli_connect($server,$user,$pass);
        if($con)
        {
            if(isset($_POST['create']))
            {
                $q="CREATE DATABASE $db";
                $result=mysqli_query($con,$q);
                if($result)
                {
                    echo "Database $db created successfull";
                }
                
            
                
            }
            if(isset($_POST['drop']))
            {
                $qu="DROP DATABASE $db";
                $res=mysqli_query($con,$qu);
                if($res)
                {
                    echo "Database $db deleted Successfull";
                }
            }
        }
        else
        {
            echo mysqli_connect_error($con);
        }
        ?>
</body>
</html>