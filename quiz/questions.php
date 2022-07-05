<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questions</title>
</head>
<body>
    
    <center>
        <form method="post">
            <button type="submit" name="sub">Take quiz</button>
        </form>

    </center>
    
    <?php
    if(isset($_POST['sub']))
    {
        $servername="localhost";
        $username="naeem";
        $password="Navjivan";
        $db="quiz";
    try 
    {
        $con= new mysqli($servername,$username,$password,$db);
        if($con->connect_error)
        {
            die("ERROR! while connecting $db ".$con->connect_error);
        }
        else
        {   
            $q="SELECT * FROM `ques`";
            
            if($r=$con->query($q))
            {
                // echo "Done";
                // print_r($r);
                if($r->num_rows>0)
                {
                    echo "<form action='subquiz.php' method='POST'>";
                    echo "<table border=1 cellspacing=0 cellpadding=10 style='margin:0px auto; text-align:center; margin-top:50px; width:80%; font-family:Arial;'>";
                    echo "<tr><th>Question No</th><th>Questions</th><th>A</th><th>B</th><th>C</th><th>D</th></tr>";
                    $name=1;
                    $count=0;
                    while($row= $r->fetch_assoc())
                    {
                        echo "<tr>";
                        echo "<td>{$row['qid']}</td>";
                        echo "<td>{$row['questions']}</td>";
                        echo "<td>
                        <input type='radio' name='$name' id='{$row['op1']}' value='{$row['op1']}'>
                        <label for='{$row['op1']}'>
                        {$row['op1']}
                        </label>
                        </td>";

                        echo "<td>
                        <input type='radio' id='{$row['op2']}' name='$name' value='{$row['op2']}'>
                        <label for='{$row['op2']}'>
                        {$row['op2']}
                        </label>
                        </td>";

                        echo "<td>
                        <input type='radio' id='{$row['op3']}' name='$name' value='{$row['op3']}'>
                        <label for='{$row['op3']}'>
                        {$row['op3']}
                        </label>
                        </td>";
                        
                        echo "<td>
                        <input type='radio' id='{$row['op4']}' name='$name' value='{$row['op4']}'>
                        <label for='{$row['op4']}'>
                        {$row['op4']}
                        </label>
                        </td>";
                        
                        echo "</tr>";

                        
                        $name+=1;

                        
                    }
                    echo "</table>";
                    echo "
                        <br>
                        <input type='submit' value='submit quiz' name='subquiz'>
                    </form>
                    ";
                    
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
    }
     catch (Exception $th) 
     {
        echo $th->getMessage();
    }
    

    }
    
    ?>
</body>
</html>