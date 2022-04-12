<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" con|tent="width=device-width, initial-scale=1.0">
    <style>
        #container
        {
            width:20%;
            margin:0px auto;
            margin-top:100px;
            /* background-color:grey; */
        }
    </style>
    <title>Static form</title>
</head>
<body>
    <?php

class Show
        {   
            static $x=0;
            function __construct()
            {
                // static $x=0;
                
                echo "class constructor has been called";
                echo "<input type=text value=".self::$x." readonly>";
                self::$x++;
            }
        }
        $i=0;
        while ($i<10)
        {
        if(isset($_POST['sub']))
        {   
                
                
                $o[$i]=new Show();
        }
             $i++;
        }
        
       

        ?>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <div id="container">
        
                <input type="text" name="show" size=5><br><br>
                <!-- <input type="submit" value="Submit" name="sub"> -->
                <button type="submit" name="sub"> Submit</button>
            </div>
        </form>
    </body>
</html>