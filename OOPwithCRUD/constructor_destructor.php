
<!doctype html>
<html>
<head>
 <title>Constructor & Destructor Example</title>
 <style>
  body
    {font-family:verdana}.phpcoding{width:900px; margin: 0 auto;background:#f1f1f1}.headeroption, .footeroption{background:#2B81D7;color:#fff;text-align:center;padding:20px;}.headeroption h2, .footeroption h2{margin:0}.maincontent{min-height:400px;padding:20px;border:8px solid #2B81D7;margin:10px}
 </style>
</head>
<body>

<div class="phpcoding">
 <section class="headeroption">
    <h2><?php echo "Constructor & Destructor Method Partice"; ?></h2>
 </section> 

 <section class="maincontent">
   <?php
    class Person{
        public $personName;
        public $personAge;
        public $id;
        public function __construct($name, $age, $id)
        {
            $this->personName = $name;
            $this->personAge = $age;
            $this->id = $id;
            echo "User name is {$this->personName}.<br>{$this->personName}'s age is {$this->personAge}.<br>{$this->personName}'s userId is {$this->id}";
        }


        function __destruct()
        {
            unset($this->personName, $this->personAge, $this->id);
            echo "Destructor function calling";
        }

    }

    $newPerson = new Person("Md. Rajib Hossain", 26, "2015-12-12");

    //unset($newPerson);
    $newPerson = new Person('Md. Raju', 26, "2015-11-11");
    echo $newPerson->personName;

   ?>
   
     
   
  </section>
 <section class="footeroption">
  <h2><?php echo "Presented by Md. Rajib Hossain"; ?></h2>
 </section>
</div>
</body>
</html>