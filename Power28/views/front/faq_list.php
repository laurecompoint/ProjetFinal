<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="assets/css/products.css">
    <title>Power 28 : FAQ</title>
</head>
<body class="">

<?php require ('Partials/nav.php');?>

<div class="">
<?php require 'faq.php'; ?>
</div>
<div class="container-fluid">


      <?php if(!empty($faq)): ?>

        <?php foreach($faq as $key => $faq): ?>

      <div id="accordion" role="tablist">


       <div id="accordion" role="tablist" class="categoryquestion">

               <a class="collapsed" data-toggle="collapse" href="#<?php echo $faq['id']; ?>" aria-expanded="false" aria-controls="collapseTwo">
                 <h4 class="test"><?php echo $faq['question']; ?></h4>
               </a>

            <div id="<?php echo $faq['id']; ?>" class="collapse" role="tabpanel" aria-labelledby="headingTwo">

                  <p class="mt-3"><?php echo $faq['reponse']; ?></p>


            </div>


      </div>

            <?php endforeach; ?>

          <?php else: ?>
            <!-- s'il n'y a pas d'articles à afficher (catégorie vide ou aucun article publié) -->
              <p class="mt-5">Aucune question dans cette catégorie...</p>
          <?php endif; ?>



        </div>

</div>
<div class="questionmargine d-flex flex-column justify-content-center ml-3">
    <img src="assets/img/question.png" class="question rounded mx-auto d-block" alt="imagefaq"/>
    <a href="index.php?page=forum_list&category_id=1"><h4 class="text-center mt-5">Si vous avez d'autres question ?</h4></a>

</div>

</body>
</html>
