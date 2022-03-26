<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataTypes</title>
</head>
<body>
    <h1 align="center">Arithmetic Operation between 2 variables in PHP</h1>
    <?php
            $a=20;
            $b=40;
            $add=$a+$b;
            $sub=$a-$b;
            $div=$a/$b;
            $mul=$a*$b;
            $mod=$a%$b;

            echo "first variable is ".$a."& second is ".$b."<br/><br>";
            echo "add=".$add."<br/>";
            echo "sub=".$sub."<br/>";
            echo "mul=".$mul."<br/>";
            echo "div=".$div."<br/>";
            echo "mod=".$mod."<br/>";
            echo var_dump($a);  



    ?>
</body>
</html>