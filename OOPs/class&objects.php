<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class and Objects</title>
</head>
<body>
    
<?php
class Continent
{
    public $continent;
    public function setcontinent($cont)
    {
        $this->continent=$cont;
    }
    public function getcontinent()
    {
        echo "Continent= ".$this->continent;
    }

}
$obj=new Continent();
$obj->setcontinent("ASIA");
$obj->getcontinent();

?>
</body>
</html>