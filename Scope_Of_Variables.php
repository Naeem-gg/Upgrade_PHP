<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable Scope</title>
</head>
<body>
    
    <?php
            echo "<h1 align=center>Understanding local/glocal/function parameters/static variables</h1>";
            echo "local variables<br>";
            print("variables which have their value within their respected function are known as local variables:");
            
            function locall()
            {
                $fun=320;
            }

    ?>
</body>
</html>