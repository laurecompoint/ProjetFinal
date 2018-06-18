<?php
require_once('models/admin/category_modif.php');

$categories = admincategory();

if(isset($_GET['category_id']) && isset($_GET['action']) && $_GET['action'] == 'delete'){

    admindelate([ $_GET['category_id'] ]);
    $message = "Suppression efféctuée.";
    header('location:index.php?admin=category_list');
    exit;


}


require_once('views/admin/category_list.php');
?>