<?php
    //session_start();
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
            //include_once'index.php';
            //include_once'congratulation.php';
            include'inheritance.php';
            //include_once'result.php';
        ?>
        <div class="phpcoding">
            <section class="headeroption">
                <h2><?php echo "Simple Registration Project"; ?></h2>
            </section> 

            <section class="maincontent">            
                <form action="result.php" method="post">

                    <h2 style="text-align: center;"><?php  echo $GLOBALS['userRole']?> Registration Form : </h2>
                    <label for="fname">Enter First Name:</label><br>
                    <input type="text" id="fname" name="fname" size="50"><br>
                    <label for="fname">Enter Last Name:</label><br>
                    <input type="text" id="lname" name="lname" size="50"><br>
                    <label for="id">$role ID:</label><br>
                    <input type="text" id="id" name="id" size="5"><br><br>
                    <label for="number">Phone Number:</label><br>
                    <input type="number" id="number" name="number" size="13"><br><br>
                    <label for="email">E-mail Address:</label><br>
                    <input type="email" id="email" name="email" size="35"><br><br>

                    <input type="submit" value="Cancel">
                    <input type="submit" value="Submit" name="registation">

                </form>
                          
            </section>
            <section class="footeroption">
                <h2><?php echo "Presented by Md. Rajib Hossain"; ?></h2>
            </section>
        </div>


    </body>
</html>