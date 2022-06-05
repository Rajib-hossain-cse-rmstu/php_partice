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
                    interface school{
                        public function mySchool();
                    }
                    interface collage{
                        public function myCollage();
                    }
                    interface university{
                        public function myUniversity();
                    }

                    class Teacher implements school,collage,university{
                        public function __construct()
                        {
                            $this->myCollage();
                            $this->mySchool();
                            $this->myUniversity();
                        }
                        public function mySchool()
                        {
                            echo "I am a School teacher.<br>";
                        }
                        public function myCollage()
                        {
                            echo "I am a collage teacher. <br>";
                        }
                        public function myUniversity()
                        {
                            echo "I am a University teacher.<br>";
                        }
                    }
                    class Student implements school, collage, university{
                        public function __construct()
                        {
                            $this->mySchool();
                            $this->myCollage();
                            $this->myUniversity();
                        }
                        public function myCollage()
                        {
                            echo "I am a Collage student<br>";
                        }
                        public function mySchool()
                        {
                            echo "I am a school student<br>";
                        }
                        public function myUniversity()
                        {
                            echo "I am a university student<br>";
                        }
                    }

                    $newStudent = new Student();
                    echo "<br><br>";
                    $newTeacher = new Teacher();
                ?>    
            </section>
            <section class="footeroption">
                <h2><?php echo "Presented by Md. Rajib Hossain"; ?></h2>
            </section>
        </div>
    </body>
</html>