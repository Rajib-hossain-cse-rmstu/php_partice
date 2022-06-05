<!doctype html>
<html>
    <head>
        <title>PHP Array Object Example Partice</title>
        <style>
            body
                {font-family:verdana}.phpcoding{width:900px; margin: 0 auto;background:#f1f1f1}.headeroption, .footeroption{background:#2B81D7;color:#fff;text-align:center;padding:20px;}.headeroption h2, .footeroption h2{margin:0}.maincontent{min-height:400px;padding:20px;border:8px solid #2B81D7;margin:10px}
        </style>
    </head>
    <body>
        <div class="phpcoding">
            <section class="headeroption">
                <h2><?php echo "PHP Array Object Example Partice"; ?></h2>
            </section> 
            <section class="maincontent">
                <?php
                    $newArray = array("HTML", "CSS", "PHP", "JAVASCRIPT");
                    $coding = new ArrayObject($newArray);
                    $coding->append("JAVA");
                    $iterator1 = $coding->getIterator();
                    while ($iterator1->valid()){
                        echo $iterator1->key() . " => " . $iterator1->current()."<br>";
                        $iterator1->next();
                    }
                ?>
            </section>
            <section class="footeroption">
                <h2><?php echo "Presented by Md. Rajib Hossain"; ?></h2>
            </section>
        </div>
    </body>
</html>