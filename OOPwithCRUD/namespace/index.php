<!doctype html>
<html>
    <head>
        <title>Namespace Example Partice</title>
        <style>
            body
                {font-family:verdana}.phpcoding{width:900px; margin: 0 auto;background:#f1f1f1}.headeroption, .footeroption{background:#2B81D7;color:#fff;text-align:center;padding:20px;}.headeroption h2, .footeroption h2{margin:0}.maincontent{min-height:400px;padding:20px;border:8px solid #2B81D7;margin:10px}
        </style>
    </head>
    <body>
        <div class="phpcoding">
            <section class="headeroption">
                <h2><?php echo "nameSpace Example Partice"; ?></h2>
            </section> 
            <section class="maincontent">
                <?php

                    // spl_autoload_register(function ($class_name){
                    //     require $class_name . '.php';
                    // });
                    include 'css.php';
                    include 'html.php';
                    include 'javascipt.php';
                    include 'laravel.php';
                    include 'php.php';
                        

                    new class\css\Css();
                    echo "<br>";
                    new class\html\Html();
                    echo "<br>";
                    new class\php\Php();
                    echo "<br>";
                    new class\laravel\Laravel();

                ?>
            </section>
            <section class="footeroption">
                <h2><?php echo "Presented by Md. Rajib Islam"; ?></h2>
            </section>
        </div>
    </body>
</html>