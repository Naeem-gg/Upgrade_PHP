<?php
   

    $servername="localhost";
    $username="naeem";
    $password="Navjivan";
    $db="lang";
    try 
    {
        $con= new mysqli($servername,$username,$password,$db);
        if($con->connect_error)
        {
            die("ERROR! while connecting $db ".$con->connect_error);
        }
        else
        {
            $q="SELECT * FROM langs";
            $r=$con->query($q);
            // print_r($r);
            if($r->num_rows>0)
            {
                // echo "rows found";
                echo "<table align=center border=1 cellspacing=0 cellpadding=20 style='width:60%; margin-top:100px;'>";
                echo "<tr><th>Sr No</th><th>Language Name</th><th>Year</th><th>Image</th><th>Description</th><th>Time</th></tr>";
                while($row=$r->fetch_assoc())
                {
                    echo "<tr>";
                    echo "<td>";
                    echo $row["srno"];
                    echo "</td>";
                    
                    echo "<td>";
                    echo $row["lang_name"];
                    echo "</td>";
                    
                    echo "<td>";
                    echo $row["year"];
                    echo "</td>";
                    
                    echo "<td>";
                    echo "<img src={$row["lang_logo"]} width=100>";
                    echo "</td>";
  
                    echo "<td>";
                    echo $row["lang_desc"];
                    echo "</td>";
                    
                    echo "<td>";
                    echo $row["date"];
                    echo "</td>";
                    
                    echo "</tr>";
                }
                echo "</table>";
            }
            else
            {
                echo "No data found for retrive";
            }
        }
    }
    catch (Exception $th) 
    {
        echo $th->getMessage();
    }

    ?>