<?php
include "same_header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
</head>
<body>
    <h1>DISPLAY PRODUCTS</h1>
    <form method="post">
        <select name='slt'>
            <option>Select customer name</option>
            <?php
            $f=fopen("customers.csv","r");
            while(($row=fgetcsv($f))!==false)
            {
                echo "<option value=$row[0]>";
                echo $row[0];
                echo "</option>";
            }
            fclose($f);
            ?>
        </select> <br><br>
        <input type="submit" value="Retrive All" name="sub">
        <?php
    if(isset($_POST['sub']))
    {
        $f1=fopen("customers.csv","r");
            $r=0;
            $selected_name=$_POST['slt'];
            echo "<table border=1>";
            while(($row1=fgetcsv($f1))!==false)
            {
                echo "<tr>";
                if($row1[0]===$selected_name)
                {
                    foreach ($row1 as $r1) {
                        echo "<td>$r1</td>";
                    }
                }
                else
                {
                    echo "not matched";

                }
                echo "</tr>";
                $r++;
            }
            echo "</table>";
            
            
            
            
            
            
            
            
            
            

            
            // $f=fopen("products.csv","r");
            // echo "<table border=1 cellspacing=0 cellpadding=5>";
            // while(($row=fgetcsv($f))!==false)
        // {
            //    echo "<tr>";
        //    foreach ($row as $r) 
        //    {
            //      echo "<td>".$r."</td>";
            //    }
            //    echo "</tr>";
            // }
            // echo "</table>";
        }
        ?>
</form>
</body>
</html>