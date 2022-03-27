<?php
// if(!$_SESSION['status'])
// {
//     header("Location:userlogin.php");
// }
?>
<?php
include "same_header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
</head>
<body>
    <h1>ADD PRODUCTS</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <strong>Product Name:</strong>
    <input type="text" name="product_name" placeholder="Enter Product Name" size='50' required>
    <strong>Price:</strong>
    <input type="number" name="product_price" placeholder="Enter Product Price" required><br><br>
    <input type="reset" value="clear values" name="clear">
    <input type="submit" value="Add Product" name="sub">

    </form>
    <?php
        if(isset($_POST['sub']))
        {
            $f=fopen("products.csv","r") or die("ERROR while opening file");
            $flag=0;
            while(($row=fgetcsv($f))!==false)
            {
                if($row[0]===$_POST['product_name'])
                {
                    echo "<script>alert('product already exists')</script>";
                    $flag=1;
                    fclose($f);
                    break;
                }
            }
                if($flag===0)
                {
                    $mydata=array($_POST['product_name'],$_POST['product_price']);
                    $f1=fopen("products.csv","a");
                    fputcsv($f1,$mydata) or die("Unable to write data in $f1");
                    echo "Data added successfully";
                    fclose($f1);

                        
                }
            
        }
    ?>      
</body>
</html>