<!-- ################# Md. Rajib Hossain ################# -->
<!doctype html>
<html>
    <head>
        <title>Magic Method Example Partice</title>
        <style>
            body
                {font-family:verdana}.phpcoding{width:900px; margin: 0 auto;background:#f1f1f1}.headeroption, .footeroption{background:#2B81D7;color:#fff;text-align:center;padding:20px;}.headeroption h2, .footeroption h2{margin:0}.maincontent{min-height:400px;padding:20px;border:8px solid #2B81D7;margin:10px}
        </style>
    </head>
    <body>
        <div class="phpcoding">
            <section class="headeroption">
                <h2><?php echo "GET SET CALL Magic Method Partice"; ?></h2>
            </section> 
            <section class="maincontent">
                <?php 
                    class Student{
                        public $name;

                        public function details(){
                            echo "Your name is {$this->name}";
                        }

                        public function __get($undefinedPropertiy){
                            echo "You enter an undefined property as $undefinedPropertiy";
                        }

                        public function __set($undefinedPropertiy, $value){
                            echo "Your are trying to set an undefined property value as $undefinedPropertiy is $undefinedPropertiy->$value";
                        }

                        public function __call($undefinedMethod, $arrayValues)
                        {
                            echo "Undefined Method name is {$undefinedMethod} and <strong>method and arguments : </strong> " .implode(', ',$arrayValues). "<br>";
                        }
                    }




                    if(class_exists('Student')){
                        $newStudent = new Student();
                        if(method_exists($newStudent, "detailss")){
                            $name = $newStudent->name = "Md. Rajib Hossain";
                        $newStudent->details($name);
                        echo "<br>";
                        $newStudent->abc;
                        echo "<br>";
                        $newStudent->def="Hi! Everyone...";
                        echo "<br>";
                        $newStudent->noMethod("Md. Rajib Hossain", 26, "Laravel Developer");
                        }else{
                            echo "method not found";
                        }
                    }else{
                        echo "Class not Found!!!";
                    }
                ?>
            </section>
            <section class="footeroption">
                <h2><?php echo "Presented by Md. Rajib Hossain"; ?></h2>
            </section>
        </div>
    </body>
</html>


<!-- 
    ############## Out put #############

Your name is Md. Rajib Hossain
You enter an undefined property as abc
Your are trying to set an undefined property value as def is def->Hi! Everyone...
Undefined Method name is noMethod and method and arguments : Md. Rajib Hossain, 26, Laravel Developer -->