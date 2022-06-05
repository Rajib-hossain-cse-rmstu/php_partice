
<!doctype html>
<html>
<head>
 <title>Constructor Example</title>
 <style>
  body
    {font-family:verdana}.phpcoding{width:900px; margin: 0 auto;background:#f1f1f1}.headeroption, .footeroption{background:#2B81D7;color:#fff;text-align:center;padding:20px;}.headeroption h2, .footeroption h2{margin:0}.maincontent{min-height:400px;padding:20px;border:8px solid #2B81D7;margin:10px}
 </style>
</head>
<body>

<div class="phpcoding">
 <section class="headeroption">
  <h2><?php echo "Constructor Partice"; ?></h2>
 </section> 
 <section class="maincontent">
 
 
 
   <?php
    class Person{
        public $personName;
        public $personAge;

        public function __construct($name, $age){
            $this->personName = $name;
            $this->personAge = $age;
        }
        public function getDetails(){
            echo "Person name is : {$this->personName}.<br> Person's age number : {$this->personAge}<br>.";
        }

    }

    $newPerson = new Person("Md. Rajib Hossain", 26);
    $newPerson->getDetails();

   ?>
   
     
   
  </section>
 <section class="footeroption">
  <h2><?php echo "Presented by Md. Rajib Hossain"; ?></h2>
 </section>
</div>
</body>
</html>