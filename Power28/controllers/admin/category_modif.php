<?php

require_once('models/admin/category_modif.php');


if(isset($_POST['save'])) {
    ajoutercategory();
    header('location:index.php?admin=category_list');
    exit;
}
if(isset($_POST['update'])){
    modifcategory();
    header('location:index.php?admin=category_list');
    exit;
}
if(isset($_GET['category_id']) && isset($_GET['action']) && $_GET['action'] == 'edit') {
   $category = categoryId();
}

require_once('views/admin/category_modif.php');
?>

