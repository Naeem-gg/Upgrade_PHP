<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>unlink() in php</title>
</head>
<body>
    <!-- <h1>deleting files in php</h1> -->
        <form method="POST">

            <input type="text" name="inp">
            <input type="submit" value="submit" name="sub">




        </form>
        
        <?php
    
                // $myfiles=fopen("files.html","r");
                // var_dump($myfiles);
                // $x=fread($myfiles,5);
                // echo $x;
                // $s=fileatime('file.txt');
                // echo $s;
                // echo date("F d Y H:i:s",$s);

                // $x=fopen("file.txt");
                unlink("files.html");
        ?>
</body>
</html>