<?php

require_once('models/admin/commentaire_modif.php');



    if(isset($_POST['save']))
    {
        insertcommentaire($_POST['content'], $_POST['forum_id'], $_POST['is_published'], $_POST['created_at']);
        $message = insertcommentaire($_POST['content'], $_POST['forum_id'], $_POST['is_published'], $_POST['created_at']);

    }


if(isset($_POST['update'])){
    updatecommentaire($_POST['content'], $_POST['forum_id'],  $_POST['is_published'], $_POST['created_at'], $_POST['id']);
    $message = insertcommentaire($_POST['content'], $_POST['forum_id'], $_POST['is_published'], $_POST['created_at']);

}
if(isset($_GET['commentaire_id']) && isset($_GET['action']) && $_GET['action'] == 'edit') {
   $commentaire = commentaireId();
}

require_once('views/admin/commentaire_modif.php');
?>

