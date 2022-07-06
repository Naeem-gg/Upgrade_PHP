<?php
session_start();
if(!isset($_SESSION['user']))
{
    header("Location:userlogin.php");
}
?>
<?php
if (isset($_POST['subquiz'])) {
    $servername = "localhost";
    $username = "naeem";
    $password = "Navjivan";
    $db = "quiz";
    try
    {
        $con = new mysqli($servername, $username, $password, $db);
        if ($con->connect_error) {
            die("ERROR! while connecting $db " . $con->connect_error);
        } else {
            $q = "SELECT * FROM `ques`";

            if ($r = $con->query($q)) {
                // echo "Done";
                // print_r($r);
                if ($r->num_rows > 0) {
                    $count = 0;
                    $i = 1;
                    while ($row = $r->fetch_assoc()) {
                        if (@$_POST[$i] === $row['correct']) 
                        {

                            // echo "<br>".$count++."<br>";
                            $count++;

                        }
                        $i++;
                    }
                    // $post=
                    $attempted_questions = count($_POST)-1;
                    $wrong_answers = $attempted_questions - $count;
                    date_default_timezone_set('Asia/Kolkata');
                    $timezone = date_default_timezone_get();
                    echo "<script>alert($timezone);</script>";
                    $date = date('m/d/Y h:i:s a', time());
                    echo "<table border=1 cellspacing=0 cellpadding=10 style='margin:0px auto; text-align:center; margin-top:50px; width:80%; font-family:Arial;'>";
                    echo "<tr><th>Attempted questions</th><th>Correct answers</th><th>Wrong Answers</th><th>Time</th></tr>";
                    // while($row = $r->fetch_assoc())
                    // {
                        echo "<tr>
                            <td>$attempted_questions</td>
                            <td>$count</td>
                            <td>$wrong_answers</td>
                            <td>$date</td>
                        </tr>";
                    // }
                    echo "</table>";
                }
                 else 
                {
                    echo "No records to fetch";
                }
            }
             else 
             {
                echo "User not found";
            }

        }
    } catch (Exception $th) {
        echo $th->getMessage();
    }

}
// echo "<script>document.write($_POST);</script>";
// print_r($_POST);

echo "<br><a href=questions.php>Go back</a>";
