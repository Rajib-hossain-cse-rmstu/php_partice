<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Static Method with construct inheritance ancoring Tag</title>
</head>
<body>
    <?php
        class domain{
            public static function setURL(){
                return "https://www.google.com";
            }
        }

        class hosting extends domain{
            public $getURL;
            
            public function __construct(){
                $this->getURL = parent::setURL();
            }
        }
        $obj = new hosting();
        echo "Web site URL : " . $obj->getURL;
        echo "<h1>Visiting website</h1>";
        echo '<a href="{{$obj->getURL}}" target="_blank">'. "Google" . '</a>';
        // echo '<a href="www.google.com">Google</a>';
echo "<br><br>Again<br><br>";

        class abc{
            public function abcd(){
                return "https://www.google.com";
            }
        }
        $obj = new abc();
        echo $obj->abcd();
        
    ?>
    <!-- <a href="http://www.google.com">Google</a> -->

    <a href="<?php echo $obj->abcd() ?>">Google </a>

</body>
</html>