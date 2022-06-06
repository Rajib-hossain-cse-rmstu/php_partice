<!doctype html>
<html>
    <head>
        <title>Iterator Design Pattern Example Partice</title>
        <style>
            body
                {font-family:verdana}.phpcoding{width:900px; margin: 0 auto;background:#f1f1f1}.headeroption, .footeroption{background:#2B81D7;color:#fff;text-align:center;padding:20px;}.headeroption h2, .footeroption h2{margin:0}.maincontent{min-height:400px;padding:20px;border:8px solid #2B81D7;margin:10px}
        </style>
    </head>
    <body>
        <div class="phpcoding">
            <section class="headeroption">
                <h2><?php echo "Iterator Design Pattern Example Partice"; ?></h2>
            </section> 
            <section class="maincontent">
            <?php
                spl_autoload_register(function ($class_name){
                    include  $class_name . ".php";
                });

                //procedural format code

                $blogPost = getAllPost();
                for($i=0; $i<count($posts); $i++){
                    $title = getTitle($post[$i]);
                    echo $title;
                    $author = getAuthor($author[$i]);
                    $content = getContent($content[$i]);
                    echo $content;
                    $comments = getComments($comments[$i]);
                    for($j = 0; $j < count($comments); $j++){
                        echo "CommentAuthor";
                        $com = getPostComments($comments[$j]);
                        echo $com;
                    }
                }

                // oop porcess
                $blogPost = getAllPost();
                $posts = new Post();
                foreach($posts as $post){
                    $echo $post->getTitle();
                    echo $post->getContent();
                    echo $post->getDate();
                    echo $post->getAuthor();
                    $comments = new comments($post->getComments()){
                        foreach ($comments as $comment){
                            echo $comment->getCommentAuthor();
                            echo $comment->getCommentContent();
                        }
                    }
                }

            ?>
            </section>
            <section class="footeroption">
                <h2><?php echo "Presented by Md. Rajib Hossain"; ?></h2>
            </section>
        </div>
    </body>
</html>

