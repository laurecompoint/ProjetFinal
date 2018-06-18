<?php

require_once('models/admin/commentaire_modif.php');



    if(isset($_POST['save']))
    {
        insertcommentaire($_POST['content'], $_POST['forum_id'], $_POST['is_published'], $_POST['created_at']);
        header('location:index.php?admin=commentaire_list');
        exit;
    }


if(isset($_POST['update'])){
    modifcommentaire($_POST['content'], $_POST['forum_id'],  $_POST['is_published'], $_POST['created_at'], $_POST['id']);
    header('location:index.php?admin=commentaire_list');
    exit;

}
if(isset($_GET['commentaire_id']) && isset($_GET['action']) && $_GET['action'] == 'edit') {
   $commentaire = commentaireId();
}

require_once('views/admin/commentaire_modif.php');
?>

