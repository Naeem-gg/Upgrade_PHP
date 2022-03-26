<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3 Types of array in PHP</title>
</head>
<body>

    <p><big>index array</big></p>
    <p>arrays that can be called via index values</p>
    <?php
$index_array = array(12, 54, 458.32, "NAME", "AGE");
for ($i = 0; $i < count($index_array); $i++) {
    echo $index_array[$i];
    echo "<br/>";
}
?>
    <p><big>Associative Arryas</big></p>
    <p>arrays like dictionary in python that need keys to call its respective values</p>
    <?php
$asso_array = ["name" => "Naeem", "age" => 500, "course" => "WD"]; //you have to write => to assign value to a key
// print_r($asso_array);
echo $asso_array["name"];
echo "<br>";
echo $asso_array["age"];
echo "<br>";
echo $asso_array["course"];
?>
    <p><big>multidimension array</big></p>
    <p>in simple words in array of arrays</p>
<?php

$multi_array = [array(1, 2, 3, 4, 5, 6, 7, 8, 9),
    array("name", "age", "course", "height"),
    array(12.2, 54.6, 85, 34.8)];
print_r($multi_array);
    
?>
</body>
</html>