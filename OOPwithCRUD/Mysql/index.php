<!doctype html>
<html>
    <head>
        <title>MySQL Example Partice</title>
        <style>
            body
                {font-family:verdana}.phpcoding{width:900px; margin: 0 auto;background:#f1f1f1}.headeroption, .footeroption{background:#2B81D7;color:#fff;text-align:center;padding:20px;}.headeroption h2, .footeroption h2{margin:0}.maincontent{min-height:400px;padding:20px;border:8px solid #2B81D7;margin:10px}
        </style>
    </head>
    <body>
        <div class="phpcoding">
            <section class="headeroption">
                <h2><?php echo "MySQL Example Partice"; ?></h2>
            </section> 
            <section class="maincontent">
                <?php
                   $db =  new mysqli("localhost", "root", "", "userdatamysql");
                    if(mysqli_connect_errno()){
                        echo "Connection fail....";
                        exit(); 
                    }else{
                        echo "Connection successful.....";
                    }

                    //select command in mysql
                    $sql = "select * from tbl_user";
                    $result = $db->query($sql);
                    while($data = $result->fetch_object()){
                        echo "<pre>";
                        echo "Name : " . $data->name . " -- " . "Skill Name: " . $data->skill;
                        echo "</pre>";
                    }


                    echo "<br><br><br>";

                    //update command mysql
                    $sql = "update tbl_user set skill='php developer' where id='1'";
                    $sql = "select * from tbl_user";
                    $result = $db->query($sql);
                    while($data = $result->fetch_object()){
                        echo "<pre>";
                        echo "Name : " . $data->name . " -- " . "Skill Name: " . $data->skill;
                        echo "</pre>";
                    }
                ?>
            </section>
            <section class="footeroption">
                <h2><?php echo "Presented by Md. Rajib Hossain"; ?></h2>
            </section>
        </div>
    </body>
</html>