<?php
include "same_header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        h1
        {
            color:black;
        }
    </style>
    <title>Add Product</title>
</head>
<body>
    <h1>SALES INQUERY</h1>
    <form method="post">
        <input type="text" name="cname" placeholder="Enter customer name" required>
        <input type="number" name="cphone" placeholder="Enter phone number" required><br><br>
        <?php
            $price=0;
            $qty=1000;
            $f=fopen("products.csv","r");
            echo "<table border=1 cellspacing=0 cellpadding=5 style='text-align:center;'>";
            echo "<tr><th>checkbox</th><th>Product Name</th><th>Product Price</th><th>Product Quantity</th></tr>";
            while(($row=fgetcsv($f))!==false)
            {
                echo "<tr>";
                echo "<td><input type='checkbox' value='$row[0]' name='$row[1]' checked>"."</td>";
                echo "<td>$row[0]</td>";
                echo "<td><input type='text' name=$price value=$row[1] readonly size='5'></td>";
                echo "<td><input type='number' name=$qty value=0 size=5></td>";
                echo "</tr>";
                $price++;
                $qty++;
            }
            echo "</table>";
            fclose($f); 
        ?>
        <br>
        <input type="submit" value="Save Records" name="sub"><br>
        <?php

        if(isset($_POST['sub']))
        {
            
            //print_r($_POST);
            //echo "<br>";
            $values=array_values($_POST);
            // echo "values: <br>";
            // print_r($values);
            // foreach ($values as $key) 
            // {
            //     echo "<br>$key";
            // }
            $f1=fopen("customers.csv","a");
            $pop=array_pop($values);
                // print_r($pop);
            if(($check=fputcsv($f1,$values))!==false)
            {
                echo "<script>alert('Data Saved Successfully');</script>";
            }
            else
            {
                die("ERROR! While writing customer.csv");
            }
            fclose($f1);
        }
        ?>
    </form>
</body>
</html>