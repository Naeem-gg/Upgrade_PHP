<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add langs</title>
</head>
<body>
    <form method="POST" enctype="multipart/form-data">
        <strong>Language Name: </strong>
        <input type="text" name="lang" placeholder="Enter Language Name" required><br><br>
        <!-- <strong>Password: </strong>
        <input type="password" name="pass" placeholder="Enter password" required><br><br>
        <strong>Email: </strong>
        <input type="email" name="email" placeholder="Enter email" required><br><br> -->
        <strong>Year: </strong>
        <input type="number" name="year" required><br><br>
        <strong>Logo: </strong>
        <input type="file" name="logo" required><br><br>
        <strong>Description:</strong><br><br>
        <textarea name="desc" cols="30" rows="5"></textarea><br><br>
        <input type="submit" value="Add Now" name="sub">
    </form>
    <?php
    if(isset($_POST['sub']))
    {
    $servername="localhost";
    $username="naeem";
    $password="Navjivan";
    $db="lang";
    try 
    {
        $con= new mysqli($servername,$username,$password,$db);
        if($con->connect_error)
        {
            die("ERROR! while connecting $db ".$con->connect_error);
        }
        else
        {
            $lang=$_POST['lang'];
            $year=$_POST['year'];
            $logo=$_FILES['logo']['name'];
            $desc=$_POST['desc'];
            $file=$_FILES['logo'];

            $tmp=$file['tmp_name'];
            $dest="images/".$file['name'];
            $fname=$file['name'];
            if(move_uploaded_file($tmp,$dest))
            {
                $time = date("H:i:s",time());

                echo $time;
                $q="INSERT INTO `langs` (`lang_name`, `year`, `lang_logo`, `lang_desc`, `date`) VALUES ('$lang', '$year', '$dest', '$desc','$time')";   
                if($con->query($q))
                {
                    echo "Data inserted successfully details are as shown below:";
                    echo "<br> Language Name: $lang";
                    echo "<br> Year of release: $year";
                    echo "<br> Language logo file dest: $logo";
                    echo "<br> <img src='$dest' width='100'";
                    echo "<br> <br>Description: <p>$desc</p>";
                    
                }

            }
        }
    }
     catch (Exception $th) 
     {
        echo $th->getMessage();
    }
        // print_r($_FILES['logo']);
        // echo "<img src=images/C.png width=100>";
        
    }
    ?>
</body>
</html>