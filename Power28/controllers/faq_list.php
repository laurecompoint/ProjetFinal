
<?php

require_once ('models/faq_list.php');
require_once ('models/category.php');


$categories = getCategories();

$articles = getArticles();

if(isset($_GET['category_id'])){

  $currentCategory = getCategory($_GET['category_id']);
  if($currentCategory) {

  }
}


require_once ('views/faq_list.php');


?>
