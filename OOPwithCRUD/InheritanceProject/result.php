
<!doctype html>
<html>
    <head>
        <title>Simple Calculator</title>
        <style>
            body
                {font-family:verdana}.phpcoding{width:900px; margin: 0 auto;background:#f1f1f1}.headeroption, .footeroption{background:#2B81D7;color:#fff;text-align:center;padding:20px;}.headeroption h2, .footeroption h2{margin:0}.maincontent{min-height:400px;padding:20px;border:8px solid #2B81D7;margin:10px}
        </style>
    </head>
    <body>
        <?php 
            //include_once'registration.php';
            //include_once'congratulation.php';
            include_once'inheritance.php';
            //include_once'index.php';
        ?>
        <div class="phpcoding">
            <section class="headeroption">
            <h2><?php echo "Simple Registation Project"; ?></h2>
            </section> 
            <section class="maincontent">
            
                <h2><?php  echo $GLOBALS['userRole']?> Details :</h2>

                    <label for=""><?php  echo $GLOBALS['userRole']?> Name : </label><span><?php  echo $GLOBALS['userFirstName']?></span><br>
                    <label for=""><?php  echo $GLOBALS['userRole']?> Id : </label><span><?php  echo $GLOBALS['userId']?></span><br>
                    <label for=""><?php  echo $GLOBALS['userRole']?> Email : </label><span><?php  echo $GLOBALS['userEmail']?></span><br>
                    <label for=""><?php  echo $GLOBALS['userRole']?> Phone Number : </label><span><?php  echo $GLOBALS['userPhone']?></span><br>
          
            </section>

            <section class="footeroption">
                <h2><?php echo "Presented by Md. Rajib Hossain"; ?></h2>
            </section>
        </div>


    </body>
</html>