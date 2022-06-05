<!doctype html>
<html>
    <head>
        <title>Type Hinting Example Partice</title>
        <style>
            body
                {font-family:verdana}.phpcoding{width:900px; margin: 0 auto;background:#f1f1f1}.headeroption, .footeroption{background:#2B81D7;color:#fff;text-align:center;padding:20px;}.headeroption h2, .footeroption h2{margin:0}.maincontent{min-height:400px;padding:20px;border:8px solid #2B81D7;margin:10px}
        </style>
    </head>
    <body>
        <div class="phpcoding">
            <section class="headeroption">
                <h2><?php echo "Type Hinting  Example Partice"; ?></h2>
            </section> 
            <section class="maincontent">
                <?php
                    spl_autoload_register(function ($class_name){
                        include $class_name . ".php";
                    });

                    class Calculation{
                        public $a;
                        public function getValue(array $x){
                            // return $this->a = $x;
                            foreach($x as $values){
                                echo $values[0];
                                echo " : ";
                                echo $values[1] * $values[2] . "<br>";
                            }
                        }
                    }

                    class Php{
                        public function framework(){
                            echo "Cakephp is a framework.<br>";
                        }
                        public function cms(){
                            echo "Wordpress is a cms";
                        }
                    }

                    class Java{
                        public $fromPhp;
                        function __construct(Php $values){
                            $this->fromPhp = $values;
                            $this->fromPhp->framework();
                            $this->fromPhp->cms();
                        }
                    }

                    $cal = new Calculation;
                    $newArray = array(array('Number One', 10, 20), array('Number Two', 20, 20));
                    echo $cal->getValue($newArray);


                    echo "<br><br><br>";

                    
                    $phpNew = new Php;
                    new Java($phpNew);
                ?>
            </section>
            <section class="footeroption">
                <h2><?php echo "Presented by Md. Rajib Hossain"; ?></h2>
            </section>
        </div>
    </body>
</html>