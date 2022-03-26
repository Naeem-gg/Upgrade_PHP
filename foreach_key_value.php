<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foreach as key=>value</title>
</head>
<body bgcolor="#889988">
    <font color="white">

        <?php
    /*
    $index_array=array(123,156,4564,654,564,5456,465,456,456,4564,6546);
    foreach ($index_array as $key => $value) 
    {
        echo"<br>";
        echo $value;
        
    } 
    */
    $first=array(12,54,8,4,79,5,1,4,8,5,3,8);
    $second=array(74,8,59,64,71,2,53,98,41,52,14);
    $third=array(14,52,63,98,85,74,25,63,98,41,54);
    $final=array();
    $asso_array=array("roll"=>10,"id"=>120,"batch"=>03,"subs"=>12);
    foreach ($asso_array as $key => $value) 
    {
        echo("<br>");
        echo($key." ".$value);    
    }
        $x=array_change_key_case($asso_array,CASE_UPPER);
        echo("<br>");
        print_r($x);
        echo("");

    ?>
    </font>
</body>
</html>