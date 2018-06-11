<?php

require_once ('models/forum.php');
require_once ('models/category.php');

$categories = getCategories();

if(isset($_GET['category_id'])){

  $currentCategory = getCategory($_GET['category_id']);
  if($currentCategory) {
    $forums = getForums(false, $_GET['category_id']);

  }
}
else{
    $forums = getForums(false, false);
}

require_once ('views/front/forum_list.php');

?>
