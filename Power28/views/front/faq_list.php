<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="assets/css/forums.css">
    <title>Power 28 : FAQ</title>
    <?php require ('Partials/nav.php');?>
</head>
<body class="body">

<h2 class="text-center mt-4">Les réponses à vos questions</h2>


        <?php foreach($categories as $category): ?>

        <div class="bg-white pb-5 mt-4 col-12">
        <h3 class="mt-4"><?php echo $category['name']; ?></h3>
        </div>

        <?php foreach($faqs as $faq): ?>

        <?php if($faq['category_id'] == $category['id']) : ?>

        <div id="accordion" role="tablist">

            <div class="container-fluid">
               <div id="accordion" role="tablist" class="categoryquestion">

                   <a class="collapsed" data-toggle="collapse" href="#<?php echo $faq['id']?>" aria-expanded="false" aria-controls="collapseTwo">
                         <h5 class="mb-5"><?php echo $faq['question']; ?></h5>
                   </a>

                   <div id="<?php echo $faq['id']?>" class="collapse" role="tabpanel" aria-labelledby="headingTwo">

                          <p class="mt-3"><?php echo $faq['answer']; ?></p>

                    </div>
               </div>
            </div>

            <?php endif; ?>

          <?php endforeach; ?>
            <?php endforeach; ?>
        </div>


<div class="questionmargine d-flex flex-column justify-content-center ml-3">
    <img src="assets/img/question.png" class="question rounded mx-auto d-block" alt="imagefaq"/>
    <a href="index.php?page=forum_list&category_id=1"><h4 class="text-center mt-5">Avez-vous d'autres questions ?</h4></a>

</div>

<?php require ('Partials/footer.php');?>

</body>
</html>
