<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retrive data from table</title>
</head>
<body>
     <form method="post">
         <select name="data">

            <option value="I">I</option>
            <option value="II">II</option>
            <option value="III">III</option>
            <option value="IV">IV</option>
            <option value="V">V</option>
            <option value="VI">VI</option>

         </select>
         <input type="submit" value="Retrive data" name="sub">
     </form>
     <?php
     if(isset($_POST['sub']))
     {
         $db=$_POST['data'];
        
     }

     ?>
</body>
</html>