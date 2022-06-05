<!-- ##################        Md. Rajib Hossain      ########################## -->
<!doctype html>
<html>
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
                <h2><?php echo "SPL Example Partice"; ?></h2>
            </section> 
            <section class="maincontent">
                <?php
                    $array = array("HTML", "CSS", "JAVASCRIPT", "BOOTSTRAP", "JAVA", "PHP", "LARAVEL");
                    $newArray = new ArrayIterator($array);
                    $limitArray = new LimitIterator($newArray, 0, 7);//LimitIterator($array_name, array_index, printing_array_element_number)
                    $cahingIterator = new CachingIterator($limitArray);
                    foreach($cahingIterator as $key){
                        
                        echo $key ;

                        if($cahingIterator->hasnext()){
                            echo ", ";
                        }
                    }
                ?>
                <!-- ######################## Kodeeo Limited ###################### -->
            </section>
            <section class="footeroption">
                <h2><?php echo "Presented by Md. Rajib Hossain"; ?></h2>
            </section>
        </div>
    </body>
</html>