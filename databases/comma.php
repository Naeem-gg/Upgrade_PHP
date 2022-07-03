<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>commands</title>
</head>
<body>
    <?php
    // $comm="auto commit";
    // $add="git add .";
    // $commit="git commit -m `$comm`";
    // $push="git push -u origin master";
    print_r( shell_exec("git push"));
    ?>
</body>
</html>