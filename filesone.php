<html>
<body>
<form method="post" enctype=multipart/form-data>
<input type=file name=f>

<br><br>Enter the File path<input type=text name=fl>
<br><input type="radio" name="ch" value="2">Display Last Access Time <br>
<input type="radio" name="ch" value="1">Display File Type<br>
<input type="radio" name="ch" value="3">Display File Size<br>
<input type="radio" name="ch" value="4">Delete File<br>
<input type=submit value="UPLOAD">
<input type=reset value="CLEAR">
<?php
$ch=$_POST['ch'];

switch($ch)
{
	case 1 : echo "File name : ".$_FILES['f']['name']."</br>";
		$t=$_FILES['f']['type'];
       	echo "File Type  :".$t."</br>";
      	break;
                                                
	case 2: $filename=$_POST['fl'];

		if (file_exists($filename)) 
    			echo "$filename last modified: ".date ("F d Y H:i:s.", filemtime($filename));

	break;             
	
	case 3: $filename=$_POST['fl'];	
		echo "Size of the file: ".filesize($filename);
	break;
			
	case 4: $filename=$_FILES['f']['name'];
		$dl=unlink($filename);
        print_r($dl);
		if ($dl==1) 
			echo "File deleted";
  		else 
  			echo "there is a problem deleting the file";
	break;
}
?>

</form>
</body>
</html>