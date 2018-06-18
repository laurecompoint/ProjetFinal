<?php
if(isset($_GET['admin'])){

    if(!isset($_SESSION['is_admin']) OR $_SESSION['is_admin'] == 0){
        header('location:index.php');
        exit;
    }

  if($_GET['admin'] == 'category_list'){
    require_once('controllers/admin/category_list.php');

  }
  elseif($_GET['admin'] == 'category_list'){
      require_once('controllers/admin/category_list.php');
  }
  elseif($_GET['admin'] == 'category_modif'){
      require_once('controllers/admin/category_modif.php');
  }
  elseif($_GET['admin'] == 'faq_list'){
      require_once('controllers/admin/faq_list.php');
  }
  elseif($_GET['admin'] == 'faq_modif'){

      require_once('controllers/admin/faq_modif.php');
  }
  elseif($_GET['admin'] == 'user_list'){
      require_once('controllers/admin/user_list.php');
  }
  elseif($_GET['admin'] == 'user_modif'){
      require_once('controllers/admin/user_modif.php');
  }
  elseif($_GET['admin'] == 'forum_list'){
      require_once('controllers/admin/forum_list.php');
  }
  elseif($_GET['admin'] == 'forum_modif'){
      require_once('controllers/admin/forum_modif.php');
  }
  elseif($_GET['admin'] == 'commentaire_list'){
      require_once('controllers/admin/commetaire_list.php');
  }
  elseif($_GET['admin'] == 'commentaire_modif'){
      require_once('controllers/admin/commentaire_modif.php');
  }
  else{
      require_once('views/admin/index.php');
  }

}

else{
  require_once('views/admin/index.php');
}
 ?>
