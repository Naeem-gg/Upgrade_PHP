<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP using rand() function</title>
    <style>
        .inp
        {
            width: 300px;
            height: 20px;
        }
    </style>
</head>
<body>
    <form method="POST">
        <table>
            <tr>
                <td>
                    <label for="usr"> Enter UserName:</label>
                </td>
                <td>
                    <input type="text" id="usr" name="usr" placeholder="Enter your username" class="inp" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="pass">Enter your password:</label>
                </td>
                <td>
                    <input type="password" name="pass" id="pass" placeholder="***********" class="inp" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="mb">Enter Mobile number:</label>
                </td>
                <td>
                    <input type="text" name="mb" id="mb" placeholder="Enter your mobile number" class="inp" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="res">
                        <input type="reset" value="clear" name="res" id="res">
                    </label>
                </td>
                <td>
                    <label for="sub">
                        <input type="submit" value="submit" name="sub" id="sub">
                    </label>
                </td>
            </tr>
        </table>

            <?php
               if (isset($_POST['sub'])) 
               {
                   echo"run";
               }
               else
               {
                   echo "not run";
               }
            ?>

    </form>
    
</body>
</html>