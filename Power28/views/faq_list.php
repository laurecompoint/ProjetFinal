<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimum-scale=1.0">
    <meta hhtp-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="views/assets/css/produc.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
    <title>Power 28 : FAQ</title>

</head>
<body class="article-list-body body">

<nav>

    <?php require 'partials/nav.php'; ?>

</nav>


<header>



</header>


<div class="container-fluid">


  <div class="row d-flex justify-content-around">

      <div class="category col-md-3 d-flex flex-column mt-5">

      <?php require 'partials/faq.php'; ?>

      </div>

    <div class="my-3 article-list-content col-md-7 mt-5">


      <?php

      if(isset($_GET['category_id']) ){ //si une catégorie est demandée via un id en URL

        //selection de la catégorie en base de données
        $query = $db->prepare('SELECT * FROM category WHERE id = ?');
        $query->execute( array($_GET['category_id']) );

        $currentCategory = $query->fetch();

        if($currentCategory){ //Si la catégorie demandé existe bien

          //récupération des articles publiés qui sont liés à la catégorie ET publiés
          $query = $db->prepare('SELECT * FROM faq WHERE category_id = ?');
          $result = $query->execute( array($_GET['category_id']) );
          //fetchAll() renvoie un ensemble d'enregistrements (tableau), le résultat sera à traiter avec un boucle foreach
          $articles = $query->fetchAll();
        }
        else{ //si la catégorie n'existe pas, redirection vers la page d'accueil
          header('location:index.php');
          exit;
        }

      }

      ?>

      <?php if(!empty($articles)): ?>

        <?php foreach($articles as $key => $article): ?>
        <article class="mb-4">

  <div id="accordion" role="tablist">


   <div id="accordion" role="tablist">

         <h5 class="mb-0 mt-5 question text-white">
           <a class="collapsed" data-toggle="collapse" href="#<?php echo $article['id']; ?>" aria-expanded="false" aria-controls="collapseTwo">
             <h2 class=""><?php echo $article['question']; ?></h2>
           </a>
         </h5>

        <div id="<?php echo $article['id']; ?>" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
             <div class="card-body">
              <p class=""><?php echo $article['reponse']; ?></p>
             </div>

        </div>


  </div>

        <?php endforeach; ?>

      <?php else: ?>
        <!-- s'il n'y a pas d'articles à afficher (catégorie vide ou aucun article publié) -->
        Aucun article dans cette catégorie...
      <?php endif; ?>



    </div>

</div>

</div>


    </div>

</div>

</body>
</html>
