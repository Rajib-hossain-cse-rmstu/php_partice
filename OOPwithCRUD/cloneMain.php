<!doctype html>
<html>
    <head>
        <title>Clone Example Partice</title>
        <style>
            body
                {font-family:verdana}.phpcoding{width:900px; margin: 0 auto;background:#f1f1f1}.headeroption, .footeroption{background:#2B81D7;color:#fff;text-align:center;padding:20px;}.headeroption h2, .footeroption h2{margin:0}.maincontent{min-height:400px;padding:20px;border:8px solid #2B81D7;margin:10px}
        </style>
    </head>
    <body>
        <div class="phpcoding">
            <section class="headeroption">
                <h2><?php echo "Clone Example Partice"; ?></h2>
            </section> 
            <section class="maincontent">
                <?php
                    class student{
                        public $name;
                        public $course;

                        public function __construct($name){
                            echo "Calling from constructor function : <br>";
                            echo $this->name = $name . "<br>";
                        }
                    }
                    $name = "Md. Rajib Hossain";
                    $newStudent1 = new student($name);
                    echo "<br>";
                    echo "Calling via Object: <br>" . $newStudent1->name;

                    echo "<br><br>Copy by refference :";
                    $newStrObj = new student("Md. Kabir Sheikh");

                    echo "Hi";

                    $newStrObj2 = $newStrObj;
                    echo "Assaigning new object2 values : <br>" . $newStrObj2->name = "Mizanur Rahman";

                   
                    echo "<br>Changing obj1 Name : " . $newStrObj->name;

                ?>
            </section>
            <section class="footeroption">
                <h2><?php echo "Presented by Md. Rajib Hossain"; ?></h2>
            </section>
        </div>
    </body>
</html>