<?php

require_once('models/admin/faq_modif.php');


if(isset($_POST['save'])) {
    ajouterfaq();
    header('location:index.php?admin=faq_list');
    exit;
}
if(isset($_POST['update'])){
    modiffaq();
    header('location:index.php?admin=faq_list');
    exit;
}
if(isset($_GET['faq_id']) && isset($_GET['action']) && $_GET['action'] == 'edit') {
   $faq = faqId();
}

require_once('views/admin/faq_modif.php');
?>

