<!doctype html>
<html>
    <head>
        <title>__CLASS__ get_class Example Partice</title>
        <style>
            body
                {font-family:verdana}.phpcoding{width:900px; margin: 0 auto;background:#f1f1f1}.headeroption, .footeroption{background:#2B81D7;color:#fff;text-align:center;padding:20px;}.headeroption h2, .footeroption h2{margin:0}.maincontent{min-height:400px;padding:20px;border:8px solid #2B81D7;margin:10px}
        </style>
    </head>
    <body>
        <div class="phpcoding">
            <section class="headeroption">
                <h2><?php echo "__CLass__ && get_class() Example Partice"; ?></h2>
            </section> 
            <section class="maincontent">
                <?php
                    abstract class Php{
                        public function framework(){
                            echo "Parent class Constant and Class name : " . __class__ . "<br>";
                            echo "Parent class Function and class name : " . get_class($this) . "<br>";
                        }
                    }

                    class ChildPhp extends Php{
                        public function cms(){
                            echo "Child class Constant and Class name : " . __class__ . "<br>";
                            echo "Child class Function and class name : " . get_class($this) . "<br>";
                        }

                        public function method(){
                            parent::framework();
                        }
                    }

                    $newChildPhp = new ChildPhp();
                    $newChildPhp->framework();
                    echo "<hr>";
                    $newChildPhp->cms();
                    echo "<hr>";
                    $newChildPhp->method();
                        
                ?>
            </section>
            <section class="footeroption">
                <h2><?php echo "Presented by Md. Rajib Hossain"; ?></h2>
            </section>
        </div>
    </body>
</html>