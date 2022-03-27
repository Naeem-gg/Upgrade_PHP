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
        <input type="submit" value="Retrive All" name="sub">
    </form>
    <?php
    if(isset($_POST['sub']))
    {
        $f=fopen("products.csv","r");
        echo "<table border=1 cellspacing=0 cellpadding=5>";
        while(($row=fgetcsv($f))!==false)
        {
           echo "<tr>";
           foreach ($row as $r) 
           {
             echo "<td>".$r."</td>";
           }
           echo "</tr>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>