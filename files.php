<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>use of $_FILES in php</title>
</head>
<body>
    <form method="POST" enctype=multipart/form-data>

    <br><br><br>    
    <input type="file" name="file1">
    <input type="submit" value="upload your file" name="submit">

<?php
    // if(isset($_POST))
    // {
    //     echo"<br>";
    //     if(is_array($_FILES))
    //     {
    //         foreach($_FILES as $file)
    //         {
    //            if(is_array($file))
    //            {
    //                foreach($file as $f)
    //                {
    //                    echo "<br>..".$f."=>"    ;
    //                }
    //            }
    //            else
    //            {
    //                echo"dollar file wala else";
    //            }
    //         }
    //     }
    //     else
    //     {
    //         echo"there are more thing ";
    //     }

    // }
    // else
    // {
    //     echo"Hello, World!";
    // }
    
    echo "<img src='images/3wm-thumb.jpg'>";
        
?>





</form>
</body>
</html>