<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .txt
        {
            width:200px;
            height:25px;
        }
    </style>
    <title>ArrayFunctions</title>
</head>
<body>
    <form method="POST">
        <table>
            <tr>
                 <td>
                     <label for="usr">Enter UserName:
                         </label>

                        </td>

                        <td>

                            <input type="text" name="usr" id="usr" class="txt" placeholder="Enter your unique usernamne"><br><br>
                     </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="pass">Enter your password:</label>

                        </td>
                        <td>

                            <input type="password" name="pass" id="pass" class="txt" placeholder="******************">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="shahebaz" value="submit"></td>
                    </tr>
                </table>
    </form>
    <?php
$user ="naeem";
$pass = [12345, 67891, 14987];
print_r($_POST['usr']);
function check()
{
    if ($_POST['usr'] == $user) {
        echo "<script>alert('user matched');</script>";
    } else {
        echo "<script>alert('user does not matched');</script>";
    }
    // echo '<script>alert("This is inside the function check")</script>';
}
// print_r($_GET);
if (array_key_exists("shahebaz", $_GET)) {
    check();

} else {
    echo 'no';
}

?>
</body>
</html>

