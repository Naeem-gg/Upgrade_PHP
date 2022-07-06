<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <style>
        body
        {
            /* background-image: url("images/pexels-cottonbro-5473298.jpg"); */
            
        }
    
        .user
        {
            width:30%;
            height:600px;
            /* background-color:red; */
            margin:0px auto;
            margin-top:100px;
            color:white;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Login page</title>
  </head>
  <body>
    <div class="user">
    <div class="container">
    <form method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">User Name:</label>
    <input type="text" class="form-control" name="user" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your details with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" >Password</label>
    <input type="password" class="form-control" name="pass" id="exampleInputPassword1">
  </div>
  
  <button type="submit" name="sub" class="btn btn-primary">Submit</button>
</form>
    </div>
    </div>
    <?php
    if(isset($_POST['sub']))
    {
        $user=$_POST['user'];
        $pass=$_POST['pass'];

        $servername="localhost";
        $username="naeem";
        $password="Navjivan";
        $db="quiz";
    try 
    {
        $con= new mysqli($servername,$username,$password,$db);
        if($con->connect_error)
        {
            die("ERROR! while connecting $db ".$con->connect_error);
        }
        else
        {
            $q="SELECT * FROM `userinfo` WHERE `username`='$user' AND `passw`='$pass'";
            $r=$con->query($q);
            if($r->num_rows>0)
            {
                $_SESSION['user']=$user;
                header("location:questions.php");
                
            }
            else
            {
                echo "<script>alert('user not found in database');</script>";
            }
            
        }
    }
     catch (Exception $th) 
     {
        echo $th->getMessage();
    }
    
  




        //     if($user==="naeem" && $pass==="naeem")
        // {
        //     header("location:questions.php");
        // }
    }
    ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>
