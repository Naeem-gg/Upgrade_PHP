<?php
session_start();
if(!$_SESSION['status'])
{
    header("Location:userlogin.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="UserDashboard.css">
    <style>
       
    </style>
    <title>User dashboard</title>
</head>
<body>
    <div id="maincontainer">
        <div id="right">
            <form method="post"><p><input type="submit" value="Logout" id="logout" name="logout">
        <?php
            if(isset($_POST['logout']))
            {
                sleep(3);
                header("Location:userlogin.php");
                session_destroy();
            }
        ?>
        </p>
        </form>
            <p><?php echo "<img src=".$_SESSION['image']." width='200'>";?></p>
            <p><strong>UserName:</strong><br> This is <?php echo strtoupper($_SESSION['user']);?>'s dashboard</p>
        </div>
        <h1>User Dashboard</h1>
    

    </div>

    <a href="DispProd.php" class="ahref">Display products</a><br>
    <a href="EditProd.php" class="ahref">Edit Products</a><br>
    <a href="UserDetails.php" class="ahref">User Details</a><br>
    <a href="SalesInquery.php" class="ahref">Sales Invoice</a><br>
    <a href="PrintInvoice.php" class="ahref">Print Invoice</a><br>
</body>
</html>