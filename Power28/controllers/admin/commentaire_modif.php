<?php

require_once('models/admin/commentaire_modif.php');


if(isset($_POST['save'])) {
    ajoutercommentaire();
    header('location:index.php?admin=commentaire_list');
    exit;

}
if(isset($_POST['update'])){
    modifcommentaire();
    header('location:index.php?admin=commentaire_list');
    exit;

}
if(isset($_GET['commentaire_id']) && isset($_GET['action']) && $_GET['action'] == 'edit') {
   $commentaire = commentaireId();
}

require_once('views/admin/commentaire_modif.php');
?>

