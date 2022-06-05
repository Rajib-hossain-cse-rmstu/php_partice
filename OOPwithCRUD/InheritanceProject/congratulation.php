<?php
   session_start();
   
   if (isset($_SESSION['counter'])) {
      $_SESSION['counter'] = 1;
   }else {
      $_SESSION['counter']++;
   }
   
   $msg = "You have visited this page ".  $_SESSION['counter'];
   $msg .= "in this session.";
   
   echo ( $msg );
?>
<!doctype html>
<html>
    <head>
    <title>Simple Registration Project</title>
    <style>
    body
        {font-family:verdana}.phpcoding{width:900px; margin: 0 auto;background:#f1f1f1}.headeroption, .footeroption{background:#2B81D7;color:#fff;text-align:center;padding:20px;}.headeroption h2, .footeroption h2{margin:0}.maincontent{min-height:400px;padding:20px;border:8px solid #2B81D7;margin:10px}
    </style>
    </head>

    <body>
        <?php 
            //include_once'registration.php';
            //include_once'index.php';
            include_once'inheritance.php';
            //include_once'result.php';
        ?>
        <div class="phpcoding">
            <section class="headeroption">
                <h2><?php echo "Simple Registration Project"; ?></h2>
            </section> 

            <section class="maincontent">

                <form action="congratulation.php" method="post">

                    <h2 style="text-align: center;">Congratulation $userName! Your registation successfully Complete  </h2>
                    <br><br><br><br><br>

                    <input style="text-align: center;font-size:25px; font-weight:400" type="submit" value="Ok">
                    <input style="text-align: center;font-size:25px; font-weight:400" type="submit" value="See Details" name="seedetails">
                    
                </form>   
            </section>

            <section class="footeroption">
                <h2><?php echo "Presented by Md. Rajib Hossain"; ?></h2>
            </section>
        </div>
        <?php
            // remove all session variables
            session_unset();

            // destroy the session
            session_destroy();
        ?>
    </body>
</html>