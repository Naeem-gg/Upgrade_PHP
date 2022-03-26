<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        #photo_div,#sign_div
        {
                width:150px;
                height:150px;
                background-color:black;
                float:left;
        }
        #sub
        {
                width:150px;
                height:30px;
                border-radius:10px;
                margin-left:350px;
                margin-top:50px;


        }
        /* .cs
        {
            width:80px;
            height:20px;
             background-color:red; */
        }

    </style>
    <title>uploading files</title>
</head>
<body>
    <h1 align="center">PHOTO & SIGNATURE UPLOAD</h1>
    <?php
if (isset($_POST['submit'])) {
    $sign = $_FILES['sign'];
    $photo = $_FILES['photo'];

    print_r($_POST);
    echo "<br/>";
    print_r($_FILES['photo']);
    echo "<br>";
    print_r($_FILES['sign']);
    if (($photo['type'] == "image/jpeg" || $photo['type'] == "image/jpg") && ($sign['type'] == "image/jpeg" || $sign['type'] == "image/jpg")) 
    {
        // echo "<script>alert('correct file format');</script>";
        if($photo['size']>=1000 && $sign['size']>=1000)
        {
                $img1="images/".$_FILES['photo']['name'];
                $img2="images/".$_FILES['sign']['name'];
                echo "<script>alert('correct file size good to go');</script>";
                $res_photo=getimagesize($photo['tmp_name']);
                $res_sign=getimagesize($photo['tmp_name']);
                print_r($res_photo);
                print_r($res_sign);
                move_uploaded_file($photo['tmp_name'],$img1);
                move_uploaded_file($sign['tmp_name'],$img2);
                // below if-else will get images resolution
                if(($res_photo[0]>=100 || $res_photo[1]>=100) && ($res_sign[0]>=100 || $res_sign[1]>=100))
                {
                    echo "<script>alert('correct file resolution good to go');</script>";
                    $photopath="/images".$photo['name'];
                    $signpath="/images".$sign['name'];
                }
                else
                {
                    echo "<script>alert('ERROR! Incorrect file size');</script>";
                }
        }
        else
        {
            echo "<script>alert('ERROR! Incorrect file size');</script>";
        }
    } 
    else
     {
        echo "<script>alert('ERROR! Incorrect file format (not jpg or jped)');</script>";
    }
    }
 else
 {
    echo "<script>alert('POST NOT SET');</script>";
 }

?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
    <table>
        <tr>
        <td><label for="pt">Upload a photo</label><br><input type="file" id="pt" class="cs" name="photo"></td>
        <td><div id="photo_div"><img src="<?php echo $photopath;?>" alt="its uploaded photo.jpg"></div></td>
        </tr>

        <tr>
        <td><label for="sign">Upload a signature</label><br><input type="file" id="sign" class="cs" name="sign"></td>
        <td><div id="sign_div"><img src="<?php echo $signpath;?>" alt="its uploaded signature.jpg"></div></td>
        </tr>
    </table>
<br><br>

            <input type="submit" value="upload your documents" name="submit" id="sub">

    </form>
                <!-- THIS FILE IS INCOMPLETE AS WE HAVE TO DISPLAY THE IMAGES -->

</body>
</html>