<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form details</title>
</head>
<body>
    <h1 align="center">Insert Form data in a file using PHP</h1>
        <form action="<?php  echo $_SERVER['PHP_SELF'];?>" method="post">
            <strong>Username:</strong><br>
            <input type="text" name="user" placeholder="Enter your Username"><br><br>
            <strong>Email:</strong><br>
            <input type="email" name="email" placeholder="Enter your email"><br><br>
            <strong>Password:</strong><br>
            <input type="password" name="pass" placeholder="*************"><br><br>
            <strong>Gender:</strong> <br>
            <label for="m">Male</label>
            <input type="radio" name="gender" value="male" id="m">
            <label for="f">Female</label>
            <input type="radio" name="gender" value="female" id="f"><br><br>
            <input type="reset" value="clear" name="clr">
            <input type="submit" value="submit" name="submit">
            <br> <input type="submit" value="Retrive Alll Data" name="ret">

        </form>
        <?php
          if(isset($_POST['submit']))
          {
              print_r($_POST);
              $user=$_POST['user'];
              $pass=$_POST['pass'];
              $mail=$_POST['email'];
              $gen=$_POST['gender'];

              $myfile=fopen("myfile.txt","a") or die("unable to open file");
            //   fwrite($myfile,"UserNames"."\t"."Passwords"."\t"."Emails"."\t"."gender"."\n");
              fwrite($myfile,$user."\t\t".$pass."\t\t".$mail."\t\t".$gen."\n");
            //   fwrite($myfile,$pass);
            //   fwrite($myfile,$mail);
            //   fwrite($myfile,$gen);

              fclose($myfile);
              

          }

          if(isset($_POST['ret']))
          {
                      
            $myfile=fopen("myfile.txt","r") or die("unable to open file");
                
            while (!feof($myfile)) 
                {
                    $mylines=fgets($myfile);
                    print_r($mylines);    
                }
            
            
            fclose($myfile);
              

          }
         
        ?>
</body>
</html>