<?php

require_once('models/admin/faq_modif.php');


if(isset($_POST['save']))
{
    insertfaq($_POST['question'], $_POST['reponse'], $_POST['category_id'], $_POST['is_published']);
    $message =  insertfaq($_POST['question'], $_POST['reponse'], $_POST['category_id'], $_POST['is_published']);

}
if(isset($_POST['update'])){
    updatefaq($_POST['question'], $_POST['reponse'], $_POST['category_id'], $_POST['is_published'],$_POST['id'] );
    $message = udaptefaq($_POST['question'], $_POST['reponse'], $_POST['category_id'], $_POST['is_published'],$_POST['id'] );
}
if(isset($_GET['faq_id']) && isset($_GET['action']) && $_GET['action'] == 'edit') {
   $faq = faqId();
}

require_once('views/admin/faq_modif.php');
?>

