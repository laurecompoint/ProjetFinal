
<?php

require_once ('models/faq_list.php');

$categories = getCategories();
$faqs = getFaq();

require_once ('views/front/faq_list.php');


?>
