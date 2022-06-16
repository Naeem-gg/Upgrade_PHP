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
        <strong>Username: </strong>
        <input type="text" name="user" placeholder="Enter username" required><br><br>
        <strong>Password: </strong>
        <input type="password" name="pass" placeholder="Enter password" required><br><br>
        <strong>Email: </strong>
        <input type="email" name="email" placeholder="Enter email" required><br><br>
        <strong>Mobile: </strong>
        <input type="number" name="mobile" placdeholder="Enter Mobile number" required><br><br>
        <strong>Profile: </strong>
        <input type="file" name="profile" required><br><br>
        <input type="submit" value="Subscribe Now" name="sub">
    </form>
    <?php
    if(isset($_POST['sub']))
    {
        print_r($_FILES);
        
    }
    ?>
</body>
</html>