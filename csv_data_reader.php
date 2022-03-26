<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    </style>
    <title>Retrive dropdown data in csv</title>
</head>
<body>
    <h2>Retrive data directly from CSV to your web page!</h2>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <select name="sl" id='slct'><option >THIS IS DROP DOWN MENU</option>
        
        <?php
        $f=fopen("dropdown.csv","r") or die("ERROR! unable to open ");
        $column=0;
        while(!feof($f))
        {
            $row=fgetcsv($f)[$column];
            
            // foreach($row as $col)
            // {
                echo "<option value='$row'>$row</option>";
                
            // }
            
            
            
        }
        fclose($f); 
        ?>
        </select>

        <?php
        $f=fopen("dropdown.csv","r") or die("ERROR!");
        //echo "something";
        
        if(isset($_POST['sub']))
        {
            echo "<table border=1 cellspacing=0 >";
            while(!feof($f))
            {
                $row=fgetcsv($f);
                $x=$row[0];
                if($_POST['sl']===$x)
                {
                echo "<tr>";
                    echo "<td>$row[0]</td>";
                    echo "<td>$row[1]</td>";
                    echo "<td>$row[2]</td>";
                    echo "<td>$row[3]</td>";
                echo "</tr>";
                }
                else
                {
                    echo "";
                }
          
            }
            echo "</table>";
        }
       
        fclose($f);    
        ?>


        <br><br>
    <input type="submit" value="SHOW DATA" name="sub">

    </form>
</body>
</html>