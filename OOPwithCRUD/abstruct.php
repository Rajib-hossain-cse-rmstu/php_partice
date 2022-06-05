<!doctype html>
<html>
    <head>
        <title>Abstruct Example Partice</title>
        <style>
            body
                {font-family:verdana}.phpcoding{width:900px; margin: 0 auto;background:#f1f1f1}.headeroption, .footeroption{background:#2B81D7;color:#fff;text-align:center;padding:20px;}.headeroption h2, .footeroption h2{margin:0}.maincontent{min-height:400px;padding:20px;border:8px solid #2B81D7;margin:10px}
        </style>
    </head>
    <body>
        <div class="phpcoding">
            <section class="headeroption">
                <h2><?php echo "Abstruct Example Partice"; ?></h2>
            </section> 
            <section class="maincontent">
                <?php
                    abstract class Student{
                        public $name;
                        public $age;

                        public function details(){
                            echo "{$this->name} is {$this->age} years old.<br>";
                        }

                        abstract public function school();
                    }

                    class Boy extends Student{
                        public function describe(){
                            echo "{parent::details(). And I am a high school student.<br>}";
                        }

                        public function school(){
                            echo "I like to read stroy book.";
                        }
                    }

                    $newBoy = new Boy();
                    $newBoy->name = "Md. Rajib Hossain";
                    $newBoy->age = '15';
                    $newBoy->details();
                    echo $newBoy->school();
                ?>
            </section>
            <section class="footeroption">
                <h2><?php echo "Presented by Md. Rajib Hossain"; ?></h2>
            </section>
        </div>
    </body>
</html>