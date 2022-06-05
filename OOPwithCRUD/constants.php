
<!doctype html>
<html>
<head>
 <title>Constant Example</title>
 <style>
  body
    {font-family:verdana}.phpcoding{width:900px; margin: 0 auto;background:#f1f1f1}.headeroption, .footeroption{background:#2B81D7;color:#fff;text-align:center;padding:20px;}.headeroption h2, .footeroption h2{margin:0}.maincontent{min-height:400px;padding:20px;border:8px solid #2B81D7;margin:10px}
 </style>
</head>
<body>

<div class="phpcoding">
 <section class="headeroption">
    <h2><?php echo "Constant Properties Partice"; ?></h2>
 </section> 

 <section class="maincontent">
   <?php
        class Customer{
            public $user;
            public $userId;
            const ADMIN = "Md. Rajib Hossain";

            public function __construct($name, $id)
            {
                $this->user = $name;
                $this->userId = $id;

                echo "Customer Name is : $this->user.<br>Customer Id is : $this->userId";
            }

            public function adminName()
            {
                echo "Admin Name is : " . Customer::ADMIN;
            }
            public function __destruct()
            {
                unset($this->user);
                unset($this->userId);
            }
        }

        $user = "Imtiaz Ahmed";
        $userId = "2018-12-12";

        $newCustomer = new Customer($user, $userId);
        echo "<br>";
        $newCustomer->adminName();
   ?>
   
     
   
  </section>
 <section class="footeroption">
  <h2><?php echo "Presented by Md. Rajib Hossain"; ?></h2>
 </section>
</div>
</body>
</html>