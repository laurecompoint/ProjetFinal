<?php
require_once('models/admin/category_modif.php');

$categories = admincategory();

if(isset($_GET['category_id']) && isset($_GET['action']) && $_GET['action'] == 'delete'){

    $delete = admindelate();
    if($delete){
        $message = "Suppression efféctuée.";
    }
    else{
        $message = "Impossible de supprimer la séléction.";
    }

}


require_once('views/admin/category_list.php');
?>