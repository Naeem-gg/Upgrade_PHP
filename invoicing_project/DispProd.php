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
    <h1>DISPLAY PRODUCTS</h1>
    <form method="post">
        <select name='slt'>
            <option>Select customer name</option>
            <?php
            $f=fopen("customers.csv","r");
            while(($row=fgetcsv($f))!==false)
            {
                echo "<option value=$row[0]>";
                echo $row[0];
                echo "</option>";
            }
            fclose($f);
            ?>
        </select> <br><br>
        <input type="submit" value="Retrive All" name="sub">
        <?php

function number_to_word( $num = '' )
{
    $num    = ( string ) ( ( int ) $num );
   
    if( ( int ) ( $num ) && ctype_digit( $num ) )
    {
        $words  = array( );
       
        $num    = str_replace( array( ',' , ' ' ) , '' , trim( $num ) );
       
        $list1  = array('','one','two','three','four','five','six','seven',
            'eight','nine','ten','eleven','twelve','thirteen','fourteen',
            'fifteen','sixteen','seventeen','eighteen','nineteen');
       
        $list2  = array('','ten','twenty','thirty','forty','fifty','sixty',
            'seventy','eighty','ninety','hundred');
       
        $list3  = array('','thousand','million','billion','trillion',
            'quadrillion','quintillion','sextillion','septillion',
            'octillion','nonillion','decillion','undecillion',
            'duodecillion','tredecillion','quattuordecillion',
            'quindecillion','sexdecillion','septendecillion',
            'octodecillion','novemdecillion','vigintillion');
       
        $num_length = strlen( $num );
        $levels = ( int ) ( ( $num_length + 2 ) / 3 );
        $max_length = $levels * 3;
        $num    = substr( '00'.$num , -$max_length );
        $num_levels = str_split( $num , 3 );
       
        foreach( $num_levels as $num_part )
        {
            $levels--;
            $hundreds   = ( int ) ( $num_part / 100 );
            $hundreds   = ( $hundreds ? ' ' . $list1[$hundreds] . ' Hundred' . ( $hundreds == 1 ? '' : 's' ) . ' ' : '' );
            $tens       = ( int ) ( $num_part % 100 );
            $singles    = '';
           
            if( $tens < 20 ) { $tens = ( $tens ? ' ' . $list1[$tens] . ' ' : '' ); } else { $tens = ( int ) ( $tens / 10 ); $tens = ' ' . $list2[$tens] . ' '; $singles = ( int ) ( $num_part % 10 ); $singles = ' ' . $list1[$singles] . ' '; } $words[] = $hundreds . $tens . $singles . ( ( $levels && ( int ) ( $num_part ) ) ? ' ' . $list3[$levels] . ' ' : '' ); } $commas = count( $words ); if( $commas > 1 )
        {
            $commas = $commas - 1;
        }
       
        $words  = implode( ', ' , $words );
       
        $words  = trim( str_replace( ' ,' , ',' , ucwords( $words ) )  , ', ' );
        if( $commas )
        {
            $words  = str_replace( ',' , ' and' , $words );
        }
       
        return $words;
    }
    else if( ! ( ( int ) $num ) )
    {
        return 'Zero';
    }
    return '';
}

echo number_to_word(1738832);
    if(isset($_POST['sub']))
    {
        $f1=fopen("customers.csv","r");
            
            $selected_name=$_POST['slt'];
            $sum=0;
            while(($row1=fgetcsv($f1))!==false)
            {
                
                if($row1[0]===$selected_name)
                {
                    $name=$row1[0];
                    $number=$row1[1];
                    array_shift($row1);
                    array_shift($row1);
                    
                     echo "<h3>Customer Name: $name<br>  Customer Number: $number</h3>";
                     echo "<table border='1' cellspacing='0' cellpadding='10'>";
                     echo "<tr><th>Product Name</th><th>Product Price</th><th>Product Quantity</th><th>Total Amount</th></tr>";
                     foreach (array_chunk($row1,3) as $td) 
                     {
                        echo "<tr>";
                        echo "<td>$td[0] </td>";
                        echo "<td>$td[1] </td>";
                        echo "<td>$td[2] </td>";
                        echo "<td>".$td[1]*$td[2]."</td>";
                        $sum+=$td[1]*$td[2];
                        echo "</tr>";
                        
                     }
                     $id=round(microtime(true),2);
                     echo "</table>";
                     echo "<br><br>";
                    echo "<table border='1' cellspacing='0' cellpadding='20'>";
                    echo "<tr>";
                    echo "<th>Customer Name</th>";
                    echo "<th>Customer Number</th>";
                    echo "<th>Customer ID</th>";
                    echo "<th>Amount</th>";
                    echo "<th>Tax</th>";
                    echo "<th>Total Amount</th>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>$name</td>";
                    echo "<td>$number</td>";
                    echo "<td>$id</td>";
                    echo "<td>$sum.00</td>";
                    echo "<td>5.5%</td>";
                    $total=($sum/5.5)+$sum;
                    echo "<td>".round($total,2)."</td>";
                    echo "</tr>";
                    echo "</table>";
                }
                
                // else
                // {
                    //     echo "not matched";
                    
                    // }
                    
                    
                }
                $words=number_to_word($total);
                echo "<h3>$ $words Only</h3>";
            
            
            
            
            
            
            
            
            
            
            

            
            // $f=fopen("products.csv","r");
            // echo "<table border=1 cellspacing=0 cellpadding=5>";
            // while(($row=fgetcsv($f))!==false)
        // {
            //    echo "<tr>";
        //    foreach ($row as $r) 
        //    {
            //      echo "<td>".$r."</td>";
            //    }
            //    echo "</tr>";
            // }
            // echo "</table>";
        }
        ?>
</form>
</body>
</html>