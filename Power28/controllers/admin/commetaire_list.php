<?php
require_once('models/admin/commentaire_modif.php');

$commentaires = admincommentaire();

if(isset($_GET['commentaire_id']) && isset($_GET['action']) && $_GET['action'] == 'delete'){

    $delete = $commentairedelate();
    if($delete){
        $message = "Suppression efféctuée.";
    }
    else{
        $message = "Impossible de supprimer la séléction.";
    }

}


require_once('views/admin/commentaireforum_list.php');
?>