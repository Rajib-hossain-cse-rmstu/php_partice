<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Static Member's Function</title>
</head>
<body>
<?php 
class base{
    public static $name = "Alexander Hamilton";

    public static function show(){
        echo self::$name;
    }
}

echo "Printing static member's : " . base::$name . "<br>";

echo base::show()  . " Printing static function : "  ;
echo  "<br>";
echo " printing static function : " . base::show();


echo "<br><br><br><br>";


class domain {
  protected static function getWebsiteName() {
    echo "W3Schools.com";
  }
}

class domainW3 extends domain {
  public $websiteName;
  public function __construct() {
    $this -> websiteName = parent::getWebsiteName();
  }	
}

$domainW3 = new domainW3;


?>
</body>
</html>