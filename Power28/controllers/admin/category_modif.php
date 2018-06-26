<?php

require_once('models/admin/category_modif.php');


if(isset($_POST['update'])){

    updatecategory($_POST['name'], $_POST['id']);
    $message =  modifcategory($_POST['name'], $_POST['id']);

}

if(isset($_POST['save']))
{

    insertcategory($_POST['name']);
    $message =  modifcategory($_POST['name'], $_POST['id']);


}
if(isset($_GET['category_id']) && isset($_GET['action']) && $_GET['action'] == 'edit') {
   $category = categoryId();
}

require_once('views/admin/category_modif.php');
?>

