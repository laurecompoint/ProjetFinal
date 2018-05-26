<?php


require_once('models/category.php');



$categories = getCategories();


require_once('views/index.php');

?>
