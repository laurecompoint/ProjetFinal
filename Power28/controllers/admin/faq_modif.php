<?php

require_once('models/admin/faq_modif.php');


if(isset($_POST['save']))
{

    insertfaq($_POST['question'], $_POST['reponse'], $_POST['category_id'], $_POST['is_published']);
    header('location:index.php?admin=faq_list');
    exit;

}
if(isset($_POST['update'])){
    modiffaq($_POST['question'], $_POST['reponse'], $_POST['category_id'], $_POST['is_published'],$_POST['id'] );
    header('location:index.php?admin=faq_list');
    exit;
}
if(isset($_GET['faq_id']) && isset($_GET['action']) && $_GET['action'] == 'edit') {
   $faq = faqId();
}

require_once('views/admin/faq_modif.php');
?>

