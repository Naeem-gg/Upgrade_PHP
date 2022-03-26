<?php
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        #sub input
        {
            width:100px;
            height:25px;
            margin-left:275px;

        }
        #fom
        {
            width:100%;
            margin-left:300px;
            margin-top:70px;
        }
        .ins
        {
            width:250px;
            height:20px;
        }
    </style>
    <title>Sessions in PHP</title>
</head>
<body>
    
    <font color="grey">

        <h1 align="center">Understanding $_SESSION in php</h1>

    </font>
    <div id="fom">

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <label for="user">Enter Username:</label>
            <input type="text" name="user" class="ins" placeholder="Enter your username">
            <br><br>
    <label for="pass">Enter Password:</label>
    <input type="password" name="pass" class="ins" placeholder="*********"> <br><br>
    <div id='sub'>
        
        <input type="submit" value="login" name="submit">
    </div>
</form>
</div>
<?php

    if(isset($_POST['submit']))
    {
        $_SESSION['u']=$_POST['user'];
        $_SESSION['p']=$_POST['pass'];
        $user=$_SESSION['u'];
        $pass=$_SESSION['p'];


        if($user=="phpuser" && $pass=="php@123")
        {
            // res
            $_SESSION['res']=true;
            header("Location:second_session_page.php");
        }
        elseif ($user=="phpuser" && $pass!="php@123") 
        {
            echo "ERROR! incorrect password";
            echo "<br>";
            echo "Please enter correct password";
        }
        else
        {
            echo "<script>alert('ERROR! invalid username as well as password');</script>";
        }
        
    }

?>


</body>
</html>