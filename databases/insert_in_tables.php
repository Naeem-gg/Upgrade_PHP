<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert data in tables</title>
</head>
<body>
<form method="post">
        Select database:
         <select name="data">

            <option value="I">I</option>
            <option value="II">II</option>
            <option value="III">III</option>
            <option value="IV">IV</option>
            <option value="V">V</option>
            <option value="VI">VI</option>

         </select><br>
         <br>Enter Teachers ID:
        <input type="text" name="tid" >
         Enter Teachers Name:
         <input type="text" name="tname">
         <br><br><input type="submit" value="Insert Data" name="sub">
     </form>
     <?php
        if(isset($_POST['sub']))
        {

            $tid=$_POST['tid'];
            $tname=$_POST['tname'];

            try 
            {
                $server="localhost";
                $user="naeem";
                $pass="Navjivan";
                $db=$_POST['data'];
                $conn=new mysqli($server,$user,$pass,$db);
                if(!$conn)
                {
                    die("Error! While connecting to $db");
                }
                else
                {
                        echo "Connection successfull to database $db<br>";
                        $q="INSERT INTO teachers (teacherid, teachername) VALUES ($tid, '$tname');";
                        $res=$conn->query($q);
                        if(!$res)
                        {
                            die("Error! while inserting data in table");
                        }
                        else
                        {
                            echo "Data inserted seccussfully in $db";
                        }

                }
            }
             catch (Exception $msg) 
            {
                echo $msg->getMessage();
            }
        }

     ?>
</body>
</html>