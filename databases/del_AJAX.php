<?php
session_start();
 $servername="localhost";
 $username="naeem";
 $password="Navjivan";
 $db="lang";
 try 
 {
     $con= new mysqli($servername,$username,$password,$db);
     if($con->connect_error)
     {
         die("ERROR! while connecting $db ".$con->connect_error);
     }
     else
     {
        $g=$_GET['del'];
         $q="DELETE FROM `langs` WHERE `langs`.`srno` = '$g'";
         $r=$con->query($q) or die("ERROR!! Can't delete record");
        // print_r($_GET);
        if($r)
        {
            echo "<h3>AJAX Message</h3><br><h1>Record deleted Successfully with SrNo={$_GET['del']}</h1>";
        }
     }
 }
 catch (Exception $th) 
 {
     echo $th->getMessage();
 }?>