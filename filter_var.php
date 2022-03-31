<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter variables in php</title>
</head>
<body>
    <?php
    $integer=200;
    if(filter_var($integer,FILTER_VALIDATE_INT))
    {
        echo "GOOD";
    }
    else
    {
        echo "bad";
    }
    $email="something@shd.com";
    if(filter_var($email,FILTER_VALIDATE_EMAIL))
    {
        echo "GOOD";
    }
    else
    {
        echo "bad";
    }
    ?>
</body>
</html>