<!doctype html>
<html>
    <head>
        <title>Trait Example Partice</title>
        <style>
            body
                {font-family:verdana}.phpcoding{width:900px; margin: 0 auto;background:#f1f1f1}.headeroption, .footeroption{background:#2B81D7;color:#fff;text-align:center;padding:20px;}.headeroption h2, .footeroption h2{margin:0}.maincontent{min-height:400px;padding:20px;border:8px solid #2B81D7;margin:10px}
        </style>
    </head>
    <body>
        <div class="phpcoding">
            <section class="headeroption">
                <h2><?php echo "Trait Example Partice"; ?></h2>
            </section> 
            <section class="maincontent">
                <?php
                    trait Java{
                        public function javaProgrammer(){
                            echo "I Love Java programming<br>";
                        }
                    }

                    trait Php{
                        public function phpProgrammer(){
                            echo "I love php programming<br>";
                        }
                    }

                    trait laravel{
                        public function laravelProgrammer(){
                            echo "I love laravel programming<br>";
                        }
                    }

                    trait programming{
                        use Java, Php, laravel;
                    }

                    class Developer{
                        use programming;
                    }
                    $newDeveloper = new Developer();
                    $newDeveloper->javaProgrammer();
                    $newDeveloper->phpProgrammer();
                    $newDeveloper->laravelProgrammer();
                ?>
            </section>
            <section class="footeroption">
                <h2><?php echo "Presented by Md. Rajib Hossain"; ?></h2>
            </section>
        </div>
    </body>
</html>