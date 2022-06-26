<?php
session_start();
?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <style>
        .d
        {
            display:block;
            width:250px;
            /* background-color:red; */
        }
        .uli
        {
            text-decoration:none;
            /* background-color:red; */
            
        }
    </style>
    <script>
            function del(x)
            {
                var obj = new XMLHttpRequest();
                obj.open('GET','del_AJAX.php?del='+x);
                obj.send();
                obj.onreadystatechange = function(){
                    if(obj.readyState===4 && obj.status===200)
                    {
                        
                        document.getElementById('i').innerHTML=obj.responseText;
                    }
                }
            }

            function upd()
            {
                var obj = new XMLHttpRequest();
                obj.open('GET','upd_AJAX.php');
                obj.send();
                obj.onreadystatechange = function(){
                    if(obj.readyState===4 && obj.status===200)
                    {
                        
                        document.getElementById('i').innerHTML=obj.responseText;
                    }
                }
            }
    </script>
</head>
<body>
    <span id='i'></span>
    
</html>



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
                echo "<tr><th>Sr No</th><th>Language Name</th><th>Year</th><th>Image</th><th class='d'>Description</th><th>Time</th><th>Delete</th><th>Update</th></tr>";
                while($row=$r->fetch_assoc())
                {
                    echo "<tr>";
                    echo "<td>";
                    $s=$_SESSION['srno']=$row['srno'];
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
  
                    echo "<td class='d'>";
                    echo $row["lang_desc"];
                    echo "</td>";
                    
                    echo "<td>";
                    echo $row["date"];
                    echo "</td>";
                    echo  "<td><button onclick='del($s);'>Delete</button></td>";

                    echo  "<td><button onclick='upd();'>Update</button></td>";

                    
                    echo "</tr>";
                }
                echo "</table>";
                echo "
                <form method='get'>
        <div class='uli'>
                <ul>
            <li>1</li>
            <li>2</li>
            <li>3</li>
            <li>4</li>
            <li>5</li>
        </ul>
        </div>
    </form>
                ";

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