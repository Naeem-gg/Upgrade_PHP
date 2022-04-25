<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retrive data from table</title>
</head>
<body>
     <form method="post">
         <select name="data">

            <option value="I">I</option>
            <option value="II">II</option>
            <option value="III">III</option>
            <option value="IV">IV</option>
            <option value="V">V</option>
            <option value="VI">VI</option>

         </select>
         <input type="submit" value="Retrive data" name="sub">
     </form>
     <?php
     if(isset($_POST['sub']))
     {
         $server="localhost";
         $user="naeem";
         $pass="Navjivan";
         $db=$_POST['data'];

        $conn= new mysqli($server,$user,$pass,$db);
        if($conn->connect_error)
        {
            die("Error while ".$conn->connect_error);
        }
        else
        {
            // echo "<br>Connection successfull to $db<br>";

            $q="SELECT * FROM teachers";

            $res=$conn->query($q);

            // print_r($res);
            if($res->num_rows>0)
            {
                echo "<table border=1 cellspacing=0 cellpadding=10 style='margin-top:50px; margin-left:100px;'>";
                echo "<tr><th>Teachers ID</th><th>Teachers Name</th></tr>";
                // echo "data can be accessed";
                while($row=$res->fetch_assoc())
                {
                   echo "<tr>";
                   echo "<td>".$row['teacherid']."</td><td>".$row['teachername']."</td>";
                   echo "</tr>";
                }
                echo "</table>";
            }
            else
            {
                echo "No data is present to be accessed";
            }

        }
     }

     ?>
</body>
</html>