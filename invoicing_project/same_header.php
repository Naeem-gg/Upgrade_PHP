<?php
session_start();

?>

    <link rel="stylesheet" href="same_header.css">



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