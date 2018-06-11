
<?php

if(isset($_GET['page'])){

  if($_GET['page'] == 'product'){
    require_once('front/product.php');

  }
  elseif($_GET['page'] == 'user'){
      require_once('front/user.php');

  }
  elseif($_GET['page'] == 'forum'){
      require_once('front/forum.php');
      if(isset($_POST['save'])){
          postcomments();

      }
  }
  elseif($_GET['page'] == 'forum_list'){
      require_once('front/forum_list.php');

  }
  elseif($_GET['page'] == 'userprofil'){
      require_once('front/userprofil.php');
  }
  elseif($_GET['page'] == 'faq_list'){
    require_once('front/faq_list.php');
  }
  elseif($_GET['page'] == 'fonctionnalite'){
    require_once('front/fonctionnalite.php');
  }
  elseif($_GET['page'] == 'entreprise'){
    require_once('front/entreprise.php');
  }
  elseif($_GET['page'] == 'contact'){
      require_once('front/contact.php');
  }
  elseif($_GET['page'] == 'mentionlegal'){
      require_once('front/mentionlegal.php');
  }
  else{
    require_once('front/index.php');
  }
}

else{
  require_once('front/index.php');
}
 ?>
