<!-- ##################        Md. Rajib Hossain      ########################## -->
<!doctype html>
<html lang="en">
    <head>
        <title>SPL Example Partice</title>
        <style>
            body
                {font-family:verdana}.phpcoding{width:900px; margin: 0 auto;background:#f1f1f1}.headeroption, .footeroption{background:#2B81D7;color:#fff;text-align:center;padding:20px;}.headeroption h2, .footeroption h2{margin:0}.maincontent{min-height:400px;padding:20px;border:8px solid #2B81D7;margin:10px}
        </style>
    </head>
    <body>
        <div class="phpcoding">
            <section class="headeroption">
                <h2><?php echo "Serialization Application"; ?></h2>
            </section> 
            <section class="maincontent">
                <?php
                include 'serialization.php';
                    $details = new Details();
                    $serializeDetails = serialize($details);
                     file_put_contents('personaldetails.txt', $serializeDetails);
                    echo $serializeDetails;
                    echo "<br><br><br>";
                     $serializeDetails = file_get_contents('personaldetails.txt');
                     $getContent = unserialize($serializeDetails);
                    echo "<pre>";
                     print_r($getContent);
                    echo "</pre>";
                ?>
                <!-- ######################## Kodeeo Limited ###################### -->
            </section>
            <section class="footeroption">
                <h2><?php echo "Presented by Md. Rajib Hossain"; ?></h2>
            </section>
        </div>
    </body>
</html>