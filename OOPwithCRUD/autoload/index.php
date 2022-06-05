<!-- ################# Md. Rajib Hossain ################# -->
<!doctype html>
<html>
    <head>
        <title>AutoLoad Example Partice</title>
        <style>
            body
                {font-family:verdana}.phpcoding{width:900px; margin: 0 auto;background:#f1f1f1}.headeroption, .footeroption{background:#2B81D7;color:#fff;text-align:center;padding:20px;}.headeroption h2, .footeroption h2{margin:0}.maincontent{min-height:400px;padding:20px;border:8px solid #2B81D7;margin:10px}
        </style>
    </head>
    <body>

        <div class="phpcoding">
            <section class="headeroption">
                <h2><?php echo "Autoload Partice"; ?></h2>
            </section> 
            <section class="maincontent">
                <?php 


                    spl_autoload_register(function ($class_name){
                        require $class_name . '.php';
                    });

                    $newAjax = new Ajax_new();
                    $newLaravel = new Laravel_new();
                    $newPhp = new Php_new();
                    $newJavaScript = new JavaScript_new();
                ?>
            </section>
            <section class="footeroption">
                <h2><?php echo "Presented by Md. Rajib Hossain"; ?></h2>
            </section>
        </div>
    </body>
</html>


<!-- 
    N.B autoload r somoi class name and file name must be same
    ############## Out put #############

I am learning ajax
I am learning laravel
I am learning PHP
I am learning javascript 

-->