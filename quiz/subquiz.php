<?php
if(isset($_POST['subquiz']))
{
    // echo "<script>document.write($_POST);</script>";
    print_r($_POST);
    echo "<br><a href=questions.php>Go back</a>";
}
?>