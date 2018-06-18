<?php
require_once('models/admin/commentaire_modif.php');

$commentaires = admincommentaire();

if(isset($_GET['commentaire_id']) && isset($_GET['action']) && $_GET['action'] == 'delete'){

    commentairedelate($_GET['commentaire_id']);
    $message = "Suppression efféctuée.";
    header('location:index.php?admin=commentaire_list');
    exit;


}


require_once('views/admin/commentaireforum_list.php');
?>