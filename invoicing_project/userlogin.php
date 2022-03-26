<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="userlogin.css">
    <title>user login</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <strong>Enter Email:</strong>
    <input type="email" name="e" placeholder="Enter your email"><br><br>
    <strong>Enter password:</strong>
    <input type="password" name="p" placeholder="*********"><br><br>
    
    <input type="reset" value="Clear">
    <input type="submit" value="Login" name="sub">
    <br><br> <a href="UserRegister.php"><strong>New Here?? Register here</strong></a>


    </form>
    <?php
    if(isset($_POST['sub']))
    {
    
        $f=fopen("userlogin.csv","r") or die("ERROR");
        $flag=0;
        while(!feof($f))
        {   $flag=1;
            $row=fgetcsv($f);
            if($row[0]===$_POST['e'] && $row[1]===$_POST['p'])
            {
                echo "<script>alert('login successfull');</script>";
                $_SESSION['status']=true;
                $_SESSION['e']=$_POST['e'];
                $_SESSION['p']=$_POST['p'];
                $_SESSION['image']=$row[2];
                $enu=explode("@",$_POST['e']);
                $_SESSION['user']=$enu[0];
                header("Location:UserDashboard.php");
                
            }
            
        }
        if($flag===0)
        {
            echo "<script>alert('Invalid creds entered');</script>";
        }
    }

    ?>
</body>
</html>