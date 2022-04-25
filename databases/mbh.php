<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data insertion for invitees</title>
</head>
<body>
            <h1>Please enter your 6 digit password below</h1><br><br>
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                <input type="text" name="pass" >
                <input type="submit" name="sub" value="Check">
            </form>
            <?php
            if(isset($_POST['sub']))
            {
                $server="localhost";
                $user="naeem";
                $pass="Navjivan";
                $db="mbh";
                try 
                {
                    
                    $conn=new mysqli($server,$user,$pass,$db);
    
                    if($conn->connect_error)
                    {
                        die("Error while connecting to $db".$conn->connect_error);
                    }
                    else
                    {
                        // echo "Connection successfull";
                        $check=$_POST['pass'];
                        $q="SELECT * FROM invitees WHERE password=$check";
                        $res=$conn->query($q);
                        echo "<table border=1 cellspacing=0 cellpadding=10>";
                        while($res->fetch_assoc())
                        {
                            
                            echo "<tr>";
                            echo "<td>".$res['Name']."</td><td>".$res['Mobile']."</td><td>".$res['email']."</td>";
                            echo "</tr>";

                        }
                        echo "</table>";
                        if($_POST['pass']==='123456')
                        {
                            header("Location:new.html");
                        }
                        else
                        {
                            header("Location:old.html");
                        }
                    }
                }
                
                
                
                
                catch (Exception $th) 
                {
                    echo $th->getMessage();
                }
            }
            ?>
</body>
</html>