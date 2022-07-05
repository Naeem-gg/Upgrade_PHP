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
                        if ($_POST[$i] === $row['correct']) 
                        {

                            echo "<br>".$count++."<br>";

                        }
                        $i++;
                    }

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
print_r($_POST);

echo "<br><a href=questions.php>Go back</a>";
