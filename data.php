<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data php</title>
</head>
<body>
    <?php

    $age=$_GET['age'];
    $col=$_GET['color'];
    $size=$_GET['size'];
    
    ?>

    <div style="background-color:<?php echo $col;?>;">
        <font size="<?php echo $size;?>">
            <p>this is <?php echo $age; ?> one's page</p>

        </font>
    </div>

</body>
</html>