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
                // Parent class
                abstract class Name {
                    public $name;
                    public function __construct($name) {
                        $this->name = $name;
                    }
                    abstract public function intro() : string; 
                }

                // Child classes
                class School extends Name {
                    public function intro() : string {
                        return "My name is {$this->name}. I am a school Student.<br>"; 
                    }
                }

                class College extends Name {
                    public function intro() : string {
                        return "My name is  {$this->name}. I am a college student.<br>"; 
                    }
                }

                class University extends Name {
                    public function intro() : string {
                        return "My name is {$this->name}. I am a university student.<br>"; 
                    }
                }

                // Create objects from the child classes
                $newSchool = new School("Alif Hossain");
                echo $newSchool->intro();
                echo "<br>";

                $newCollege = new College("Mashrur Ahmed");
                echo $newCollege->intro();
                echo "<br>";

                $newUniversity = new University("Md. Rajib Hossain");
                echo $newUniversity->intro();
            ?>
            </section>
            <section class="footeroption">
                <h2><?php echo "Presented by Md. Rajib Hossain"; ?></h2>
            </section>
        </div>
    </body>
</html>