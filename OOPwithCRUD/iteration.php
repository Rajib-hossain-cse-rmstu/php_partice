<!doctype html>
<html>
    <head>
        <title>Iteration Example Partice</title>
        <style>
            body
                {font-family:verdana}.phpcoding{width:900px; margin: 0 auto;background:#f1f1f1}.headeroption, .footeroption{background:#2B81D7;color:#fff;text-align:center;padding:20px;}.headeroption h2, .footeroption h2{margin:0}.maincontent{min-height:400px;padding:20px;border:8px solid #2B81D7;margin:10px}
        </style>
    </head>
    <body>
        <div class="phpcoding">
            <section class="headeroption">
                <h2><?php echo "Iteration Example Partice"; ?></h2>
            </section> 
            <section class="maincontent">
                <?php
                    class Person{
                        public $Name = "Md. Rajib Hossain";
                                    public $Age = 26;
                        public $Skill = "Developer";
                                private $Email = "rajibraju771@gmail.com";
                        protected $Password = 12345678;


                        public function iteratorInner(){
                            echo "Inside Class<br>";
                            foreach ($this as $key => $value){
                                echo "<pre>";
                                echo "$key : $value";
                                echo "</pre>";
                            }
                        }

                    }
                    $newClass = new Person;
                    foreach ($newClass as $key => $value){
                        echo "<pre>";
                        echo "$key => $value";
                        echo "</pre>";
                    }
                    echo "<br>";
                    $newClass->iteratorInner();
                ?>
            </section>
            <section class="footeroption">
                <h2><?php echo "Presented by Md. Rajib Hossain"; ?></h2>
            </section>
        </div>
    </body>
</html>