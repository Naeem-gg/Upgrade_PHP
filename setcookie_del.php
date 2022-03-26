<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>del setcookies</title>
</head>
<body>
    <?php
    // print_r($_COOKIE);
    if(is_array($_COOKIE))
    {
        foreach($_COOKIE as $c=> $val)
        {

            echo "<br><br>";
            echo $c."=>".$val;
        }
    }
    else
    {
        echo $_COOKIE;
    }

    ?>
</body>
</html>