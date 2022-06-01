
<!doctype html>
<html>
<head>
 <title>Class Object Method Partice</title>
 <style>
  body{font-family:verdana}.phpcoding{width:900px; margin: 0 auto;background:#f1f1f1}.headeroption, .footeroption{background:#2B81D7;color:#fff;text-align:center;padding:20px;}.headeroption h2, .footeroption h2{margin:0}.maincontent{min-height:400px;padding:20px;}
 </style>
</head>
<body>

<div class="phpcoding">
 <section class="headeroption">
  <h2><?php echo "Class Object Method Partice"; ?></h2>
 </section> 
 <section class="maincontent">
 
 
 
   <?php
    class Person{
        public $personName;
        public $personAge;

        public function getName($name){
            echo "Person name is : " . $this->personName = $name . "<br>";
        }
        public function getAge($age){
            echo "Person age is : " . $this->personAge = $age . "<br>";
        }
    }

    $newPerson = new Person();
    $newPerson->getName("Md. Rajib Hossain");
    $newPerson->getAge(26);
   ?>
   
     
   
  </section>
 <section class="footeroption">
  <h2><?php echo "Presented by Md. Rajib Hossain"; ?></h2>
 </section>
</div>
</body>
</html>