<?php

require_once('models/forum.php');
require_once('models/category.php');
$commentaire = getCommentaire();

if(isset($_GET['forum_id'])){

    $forum = getForum( $_GET['forum_id'] );

    if(!$forum['id']){
        header('location:index.php');
        exit;
    }

    $categories = getCategories();


    require_once('views/front/forum.php');


}


?>
<?php









?>