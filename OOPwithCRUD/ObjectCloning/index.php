<!doctype html>
<html>
    <head>
        <title>Object Cloning Example Partice</title>
        <style>
            body
                {font-family:verdana}.phpcoding{width:900px; margin: 0 auto;background:#f1f1f1}.headeroption, .footeroption{background:#2B81D7;color:#fff;text-align:center;padding:20px;}.headeroption h2, .footeroption h2{margin:0}.maincontent{min-height:400px;padding:20px;border:8px solid #2B81D7;margin:10px}
        </style>
    </head>
    <body>
        <div class="phpcoding">
            <section class="headeroption">
                <h2><?php echo "Object Cloning Example Partice"; ?></h2>
            </section> 
            <section class="maincontent">
                <?php
                    include 'new.php';

                    $newLanguage = new Language();
                    $newLanguage->setCat("PHP");
                    $newLanguage->setFramework("Laravel");
                    echo $newLanguage->getCat(). "<br>";
                    echo $newLanguage->getFramework(). "<br>";

                    // copy object by reference
                    $newObj = $newLanguage;
                    $newObj->setCat("JavaScript");
                    $newObj->setFramework("React.JS");
                    echo "Copy Object by Reference : <br><br>";
                    echo "New Object Category: " . $newObj->getCat() . "<br>";
                    echo "New Object Framework: " . $newObj->getFramework() . "<br><br>";
                    echo "Changing Old Objecs as New Object: <br><br>";
                    echo "Old Object Category As : " . $newLanguage->getCat() . "<br>";
                    echo "Old Object Framework: " . $newLanguage->getFramework() . "<br><br>";

echo "<br><br>";
                    // Copy object by value
                    $newObj2 = clone $newObj;
                    $newObj2->setCat("Python");
                    $newObj2->setFramework("MongoBD");
                    echo "Only Copy Object not Reference : <br><br>";
                    echo "New Object Category: " . $newObj2->getCat() . "<br>";
                    echo "New Object Framework: " . $newObj2->getFramework() . "<br><br>";
                    echo "Not Changing Old Objecs as New Object: <br><br>";
                    echo "Old Object Category As : " . $newObj->getCat() . "<br>";
                    echo "Old Object Framework: " . $newObj->getFramework() . "<br><br>";
                ?>
            </section>
            <section class="footeroption">
                <h2><?php echo "Presented by Md. Rajib Hossain"; ?></h2>
            </section>
        </div>
    </body>
</html>