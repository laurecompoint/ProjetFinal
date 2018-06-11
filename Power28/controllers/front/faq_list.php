
<?php

require_once ('models/faq_list.php');
require_once ('models/category.php');

$categories = getCategories();
$faq = getFaq();

if(isset($_GET['category_id'])){

    $currentCategory = getCategory($_GET['category_id']);
    if($currentCategory) {
        $forums = getFaq(false, $_GET['category_id']);

    }
}
else{
    $faq = getfaq(false, false);
}

require_once ('views/front/faq_list.php');


?>
