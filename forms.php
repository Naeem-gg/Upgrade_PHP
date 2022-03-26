<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
            function myfun()
            {
            var x=document.getElementById("txt").value;
            if(x.length>5 && x.length<10)
            {
                    document.getElementById("txtsp").innerHTML+="Go ahead";
                    document.getElementById("txtsp").style.color="green";
            }
            else
            {
                    document.getElementById("txtsp").innerHTML+="Stop";
                    document.getElementById("txtsp").style.color="red";
            }
            }

    </script>
    <style>
        #txt
        {
        width:200px;
        height:20px;
        float:left;

        }
    </style>
    <title>Forms</title>
</head>
<body>

    <form method="GET">

    <table>
        <tr>
           <td> <input type="text" placeholder="Enter something" id="txt" onclick="myfun();"></td>
            <td><span id="txtsp">*</span></td>
        </tr>
        <tr>
            <td><input type="submit" value="submit01" name="btn"></td>
            <td><input type="submit" value="submit02" name="btn1"></td>
        </tr>
    </table>




    </form>

 
    <?php

if (isset($_GET["btn"])) {
    echo "submit01 has been awaken";
}
if (isset($_GET["btn1"])) {
    echo " Submit02 has been called";
}
?>
</body>
</html>