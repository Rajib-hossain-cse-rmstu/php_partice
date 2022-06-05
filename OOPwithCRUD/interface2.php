<!doctype html>
<html>
    <head>
        <title>Interface Partice</title>
        <style>
            body
                {font-family:verdana}.phpcoding{width:900px; margin: 0 auto;background:#f1f1f1}.headeroption, .footeroption{background:#2B81D7;color:#fff;text-align:center;padding:20px;}.headeroption h2, .footeroption h2{margin:0}.maincontent{min-height:400px;padding:20px;border:8px solid #2B81D7;margin:10px}
        </style>
    </head>
    <body>
        <div class="phpcoding">
            <section class="headeroption">
                <h2><?php echo "Interface Partice"; ?></h2>
            </section> 
            <section class="maincontent">
                <?php
                    interface sayHi{
                        public function hi();
                    }
                    interface sayHello{
                        public function hello();
                    }
                    interface sayBye{
                        public function bye();
                    }

                    class Greetings implements sayHi, sayBye, sayHello{
                        public function __construct()
                        {
                            $this->hi();
                            $this->hello();
                            $this->bye();
                        }
                        public function hello()
                        {
                            echo "Hello everyone.<br>";
                        }
                        public function hi()
                        {
                            echo "Hi everyone. <br>";
                        }
                        public function bye()
                        {
                            echo "Bye everyone.<br>";
                        }
                    }
                    $newGreetings = new Greetings();
                ?>    
            </section>
            <section class="footeroption">
                <h2><?php echo "Presented by Md. Rajib Hossain"; ?></h2>
            </section>
        </div>
    </body>
</html>