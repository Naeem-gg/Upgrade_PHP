<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foreach</title>
</head>
<body>
        <form method="POST">
                <table>
                    <tr>
                        <th>UserName: </th>
                        <br><th>Password: </th>
                        
                    </tr>
                    <tr>
                        <td><input type="text" name="user" id="u" placeholder="enter username"></td>
                        <td><input type="password" name="pass" id="p" placeholder="******"></td>
                    </tr>
                    <tr>
                        <td><span>MALE:</span><input type="radio" name="gender" id="male"></td>
                        <td><span>FEMALE:   </span><input type="radio" name="gender" id="female"></td>
                    </tr>
                    <tr>
                        <td><span>JAVA</span><input type="checkbox" name="java"></td>
                        <td><span>JAVASCRIPT</span><input type="checkbox" name="js"></td>
                        
                    </tr>
                    <tr colspan="2">
                        <td><span>PYTHON</span><input type="checkbox" name="py"></td>
                        <td><span>C++</span><input type="checkbox" name="cpp"></td>
                    </tr>
                </table>
                <br><br><br><br><br><br>
        </form>
        <?php
            $usr=array("Name"=>"Naeem","age"=>255,"lang"=>"PHP");
            
            foreach ($usr as $u) 
            {
                echo "<br>".$u;
            }   


        ?>
</body>
</html>