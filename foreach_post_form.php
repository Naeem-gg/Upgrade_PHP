<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        function validate()
        {
            
            /* var uname=document.getElementById('u').value;
            var pass=document.getElementById('p').value;
            if (length.uname>5 && length.uname<10)
            {
                document.getElementById('uu').innerHTML+="invalid length(5<10)";   
                document.getElementById('uu').style.color="red";
            }
            else
            {
                document.getElementById('uu').innerHTML+="valid length(5<10)";
                document.getElementById('uu').style.color="green";
            } */
        }
    </script>
    <title>foreach with post</title>
</head>
<body>
        <form method="POST">
                <table>
                    <tr>
                        <th>UserName: </th>
                        <br><th>Password: </th>

                    </tr>
                    <tr>
                        <td id="uu">&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#8595;</td>
                        <td id="pp">&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#8595;</td>
                        
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
                        <td><span>JAVA</span><input type="checkbox" name="lang[]" value="java"></td>
                        <td><span>JAVASCRIPT</span><input type="checkbox" name="lang[]" value="javascript"></td>

                    </tr>
                    <tr>
                        <td><span>PYTHON</span><input type="checkbox" name="lang[]" value="python"></td>
                        <td><span>C++</span><input type="checkbox" name="lang[]" value="C++"></td>
                    </tr>
                    <tr>
                        <td><span>***</span></td>
                        <td><span>***</span></td>
                    </tr>
                    <tr>
                        <td><input type="reset" name="reset" id="res" value="clear form"></td>
                        <td><input type="submit" name="submit" id="sub" value="submit form" onclick="validate();"></td>
                    </tr>
                </table>
                <br><br><br><br><br><br>
            </form>
            <?php

                    if(isset($_POST))
                    {
                            print_r($_POST);
                    }
                    else
                    {
                            echo("else ");
                    } 
            if($_POST['submit form']=='submit')
            {
            echo(" ");
            }       
        else
        {
            if(is_array($_POST))
            {
                foreach($_POST as $val)
                {
                    echo $val;
                }
            }
            else
            {
                echo($_POST);
            }
        }
           /* if(is_array($_POST))
           {
                foreach($_POST as $p)
                {
                        echo ($p);
                }
           }
           else
           {
                echo("else".$_POST);
           }
 */
        ?>
</body>
</html>