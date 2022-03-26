<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSV functions in php</title>
</head>
<body>
<form method="POST">
    <strong>Enter question:</strong>
    <input type="text" name="que" size="120"><br><br>
    <label><strong> Option A:</strong></label><input type="text" name="o1" size="50">
    <label><strong> Option B:</strong></label><input type="text" name="o2" size="50"><br><br>
    <label><strong> Option C:</strong></label><input type="text" name="o3" size="50">
    <label><strong> Option D:</strong></label><input type="text" name="o4" size="50"><br><br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="reset" value="clear">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="submit" value="submit" name="sub"><br><br>
</form>
<?php  
//php for appemding questions
if(isset($_POST['sub']))
{
    // below code for creating or opening csv file
     $myfile=fopen("quest_bank.csv","a") or die("ERROR! Unable to open file");
     
    
     //below code for first line
     //$inputdata=["Questions","Option A","Option B","Option C","Option D"];
    
     $inputdata=[$_POST['que'],$_POST['o1'],$_POST['o2'],$_POST['o3'],$_POST['o4']];
     
     
     $append=fputcsv($myfile,$inputdata);
     if($append===true)
    {
        echo"Data written in file successfull.";
    }
    fclose($myfile);
}
?>
<form method="POST">
<input type="submit" value="retrive data" name="ret">

</form>
<?php
//php for retriving data
if(isset($_POST['ret']))
{
    // below code for creating or opening csv file
    // $myfile=fopen("quest_bank.csv","w") or die("ERROR! Unable to open file");
    
    $myfile=fopen("quest_bank.csv","r") or die("ERROR! Unable to open file");
    
    //below code for first line
    //$inputdata=["Questions","Option A","Option B","Option C","Option D"];
    
    //$inputdata=[$_POST['que'],$_POST['o1'],$_POST['o2'],$_POST['o3'],$_POST['o4']];
    echo "<form method='POST'>";
    echo "<table border='1' cellspacing='0' style='text-align:center;'>";
    $rowcount=0;
    while(($check=fgetcsv($myfile))!==false)
    {   echo "<tr>";
        $columncount=0;
        foreach ($check as $line)
        {
            if($rowcount!==0 )
            {
                if($columncount!==0)
                {
                    echo "<td>"."<input type='radio' ".$columncount." name=".$rowcount." required >";
                    echo $line;
                    echo "</td>";

                }
                else
                {
                    echo "<td>".$line."</td>";

                }

            }
            $columncount++;
        }
        echo "</tr>";
        $rowcount++;
    }
    echo "</table>";
    echo "<br>"."<input type='submit' value='submit your answers' name='suball'>";
    echo "</form>";
    
    fclose($myfile);
}
?>
<?php
if(isset($_POST['suball']))
{
    print_r($_POST);
}
?>
</body>
</html>