<?php

require_once ('models/faq_list.php');
require_once ('models/category.php');

$categories = getCategories();

require_once ('views/faq_list.php');

?>
