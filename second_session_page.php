<?php
session_start();
// if($_SESSION['res'])
// {
//     header("Location:second_session_page");
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login successfull</title>
</head>
<body>
    <h1>Login success for user<?php echo $_SESSION['u']; ?></h1>
    <?php
                        
    session_destroy();
    ?>
</body>
</html>