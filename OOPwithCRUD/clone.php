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
                    // Copy by Value
                    $a = 10;
                    $b = $a;
                    echo "Copy by Value Example :<br>";
                    echo "b : " . $b . "<br>";
                    echo "a : " . $a . "<br>";
                    $b = 20;
                    echo "Not Change a : " . $a . "<br><br><br>";

                    //Copy by Referrence
                    $a = 10;
                    $b = & $a;
                    echo "Copy by Reference : <br>" . "b : " . $b . "<br>";
                    echo "a : " . $a . "<br>";
                    $b = 40;
                    echo "New b : " . $b . "<br>";
                    echo "Change a : " . $a . "<br><br><br>";

                ?>
            </section>
            <section class="footeroption">
                <h2><?php echo "Presented by Md. Rajib Hossain"; ?></h2>
            </section>
        </div>
    </body>
</html>