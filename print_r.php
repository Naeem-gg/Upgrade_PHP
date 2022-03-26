<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>print_r(); | HOME</title>
</head>
<body>
        <h1 align="center">Understanding print_r() function in PHP</h1>
        <?php

            $ab="Naeem";    //STRING
            $num1=20;    //INT
            $float1=154.25;  //FLOAT

            print_r($ab."<br>");
            print_r($num1."<br>");
            print_r($float1."<br>");

            $mystrings=["Naeem","faisal","bhavesh"];    //array of strings
            print_r($mystrings);

            echo "<br><br>";        //for new lines

            $myint=[12,548,5,465,4,213,1564,4,1,31,657];        //array of integers
            print_r($myint);

            echo "<br><br>";        //for new lines

            $myfloats=[12.51,124.55,128.66,154.99,14.98];     //array of floats
            print_r($myfloats);

            class Myclass
            {
                function myfun()
                {
                    echo "THIS IS MY FUNCTION";
                }
                function myfun1()
                {
                    echo "THIS IS MY FUN1()";
                }
            }
            
            

        ?>
</body>
</html>