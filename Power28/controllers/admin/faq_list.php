<?php
require_once('models/admin/faq_modif.php');

$faqs = adminfaq();

if(isset($_GET['faq_id']) && isset($_GET['action']) && $_GET['action'] == 'delete'){

    $delete = faqdelate();
    if($delete){
        $message = "Suppression efféctuée.";
    }
    else{
        $message = "Impossible de supprimer la séléction.";
    }

}


require_once('views/admin/faq_list.php');
?>