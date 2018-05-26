<?php

require_once('common.php');
$db = dbConnect();
session_start();

if(isset($_GET['page'])){


  if($_GET['page'] == 'product'){
    require_once('controllers/product.php');
  }

  elseif($_GET['page'] == 'user'){
    require_once('controllers/user.php');
  }
  elseif($_GET['page'] == 'faq_list'){
    require_once('controllers/faq_list.php');
  }
  elseif($_GET['page'] == 'fonctionnalite'){
    require_once('controllers/fonctionnalite.php');
  }
  elseif($_GET['page'] == 'entreprise'){
    require_once('controllers/entreprise.php');
  }
  else{
    require_once('controllers/index.php');
  }
}
else{
  require_once('controllers/index.php');
}



?>
