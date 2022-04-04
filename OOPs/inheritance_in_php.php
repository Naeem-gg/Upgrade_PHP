<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table
        {
            margin-left:20px;
        }
        .s
        {
            margin-left:130px;
        }
        #x
        {
            margin-left:30px;
        }
    </style>
    <title>Class and Objects</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<br><br>
    <table>
        <tr>
            <td><strong>Enter Continent: </strong>    </td>
            <td><input type="text" name="continent">    </td>
        </tr>
        <tr>
            <td><strong>Enter Country: </strong></td>
            <td><input type="text" name="country"></td>
        </tr>
        <tr>
            <td><strong>Enter State: </strong></td>
            <td> <input type="text" name="state"></td>
        </tr>
        <tr>
            <td><strong>Enter District: </strong></td>
            <td><input type="text" name="dist"></td>
        </tr>
        <tr>
            <td><strong>Enter City: </strong></td>
            <td><input type="text" name="city"></td>
        </tr>
    </table>
        <br>
        <br><input type="submit" class="s" value="Save details" name="sub">
        <input type="submit" id="x" class="s" value="Show details" name="show">
    </form>
<?php
class Continent
{   public $country;
    public $continent;
    public function setcontinent($cont)
    {
        $this->continent=$cont;
    }
    public function getcontinent()
    {
        echo "<br>Continent= ".$this->continent;
    }

}
class Country extends Continent
{
    public function setcount($count)
    {
        $this->country=$count;
    }
    public function getcount()
    {
        echo "<br>This is Country $this->country";
    }
}
class State extends Country
{
    public function getstate($st)
    {
        $this->state=$st;
    }
    public function setstate()
    {
        echo "<br>Continent= ".$this->state;
    }
}
class District extends State
{
    public function getdist($d)
    {
        $this->dist=$d;
    }
    public function setdist()
    {
        echo "<br>Continent= ".$this->dist;
    }
}
class City extends District
{
    public function getcity($c)
    {
        $this->city=$c;
    }
    public function setcity()
    {
        echo "<br>Continent= ".$this->city;
    }
}
$obj=new City();
$obj->setcontinent($_POST["continent"]);
$obj->getcontinent();
$obj->setcount($_POST["country"]);
$obj->getcount();
$obj->getstate($_POST["state"]);
$obj->setstate();
$obj->getdist($_POST["dist"]);
$obj->setdist();
$obj->getcity($_POST["city"]);
$obj->setcity();



?>
</body>
</html>