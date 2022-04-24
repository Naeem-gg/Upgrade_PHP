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
        $con=mysqli_connect($server,$user,$pass);
        if($con)
        {
            if(isset($_POST['create']))
            {
                $db=$_POST['mydata'];
                $q="CREATE DATABASE $db";
                $result=mysqli_query($con,$q);
                if($result)
                {   
                    mysqli_close($con);
                    echo "Database $db created successfull";
                    $connect=mysqli_connect($server,$user,$pass,$db) or die("Can't connect to database $db");
                    if($connect)
                    {
                            echo "<br>New connection successfull with $db";
                                $q1="CREATE TABLE `teachers` ( `teacherid` TINYINT NOT NULL , `teachername` VARCHAR(40) NOT NULL , PRIMARY KEY (`teacherid`));";
                                $q2="CREATE TABLE `students` ( `studentid` TINYINT NOT NULL , `studentname` VARCHAR(40) NOT NULL , PRIMARY KEY (`studentid`));";
                            if(($t1=mysqli_query($connect,$q1))&&($t2=mysqli_query($connect,$q2)))
                            {
                                echo "<br>tables created successfully";
                            }
                            else
                            {
                                echo "<br>Error while creating tables";
                            }
                        //     echo "<form method='POST'>
                        //     <strong>Enter Table Name:</strong>
                        //     <input type='text' size=20 name='mytable' >
                        //     <input type='submit' value='Create' name='crtable'>
                        //     <input type='submit' value='Delete' name='drtable'>
                        // </form>";
                        // if(isset($_POST['crtable']))
                        // {

                        //     $tb=$_POST['mytable'];
                        //     $qu="CREATE TABLE `$tb` ( `srname` TINYINT NOT NULL , `studentname` VARCHAR(40) NOT NULL , PRIMARY KEY (`srname`));";
                            
                        //     $r=mysqli_query($connect,$qu) or die("can't create table $tb");
                        //     if($r)
                        //     {
                        //         echo "$tb Table created successfully";
                        //     }
                        // }
                    }

                }
                
            
                
            }
            if(isset($_POST['drop']))
            {
                $db=$_POST['mydata'];
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