<?php
require_once('models/admin/faq_modif.php');

$faqs = adminfaq();

if(isset($_GET['faq_id']) && isset($_GET['action']) && $_GET['action'] == 'delete'){

    faqdelate($_GET['faq_id']);
    header('location:index.php?admin=faq_list');
    exit;

   $message = "Suppression efféctuée.";

}


require_once('views/admin/faq_list.php');
?>