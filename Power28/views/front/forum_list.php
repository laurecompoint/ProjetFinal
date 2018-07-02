<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="assets/css/forums.css">

  <title>Power 28 : Forum </title>

</head>
<body class="body">
<?php require ('Partials/nav.php');?>

<div class="subjectforum d-flex flex-column justify-content-center">
    <?php require 'category.php'; ?>
</div>

<?php if(!empty($forums)): ?>

                <div class="subject col-md-9 mt-5">
                    <h3>Nos sujects : <?php if(isset($currentCategory)): ?><?php echo $currentCategory['name']; ?><?php else : ?><?php endif; ?> </h3>
                </div>

                <div class="row col-md-12 mt-5 d-flex justify-content-between">

                    <?php foreach($forums as $key => $topic): ?>
                    <div class="col-md-5">
                        <i class="far fa-file"></i> Sujet :  <a class="col-6" href="index.php?page=forum&forum_id=<?php echo $topic['id']; ?>"><?php echo htmlentities($topic['name']);  ?></a>
                    </div>
                    <div class="col-md-2 row d-flex justify-content-around">
                        <i class="far fa-user"></i> Auteur : <p class="col-6"><?php echo htmlentities($topic['author']);  ?></p>
                    </div>
                    <div class="col-md-5">
                        <div class="row d-flex justify-content-center">
                            <i class="far fa-calendar-alt col-md-1"></i>
                            <p class="col-md-3" ><?php echo $topic['created_at']; ?></p>
                        </div>
                    </div>

                    <?php endforeach; ?>
                </div>

                <div class="mt-5 col-md-12 row align-items-center justify-content-center">

                    <div class="blocktext col-md-5 bg-white text-center d-flex align-items-center justify-content-center">

                    <p>Possibilité d'ajouter un sujet si vous avez une question à poser.<br>
                       Vous devez être connecté pour pouvoir proposer une nouvelle discussion.
                    </p>

                    </div>

                    <div class="col-md-6 mt-5">

                    <?php if(isset($messagesubject)): ?>
                        <div class="text-danger col-12 mb-4 mt-3"><?php echo $messagesubject; ?></div>
                    <?php endif; ?>

                    <form action="index.php?page=forum_list&category_id=<?php echo $topic['category_id'] ?>" method="post">
                        <div class="form-group col-12 mt-4">
                            <input type="hidden" name="author" value="<?php echo $_SESSION['user']; ?>" class="form-control" id="formGroupExampleInput2" placeholder="Your name">
                            <label>Titre de vôtre suject</label>
                            <input type="text" name="name" class="form-control" id="formGroupExampleInput2" placeholder="Title Subject"> <br>
                            <label>Contenue de vôtre suject</label>
                            <input type="text" name="content" class="form-control" id="formGroupExampleInput2" placeholder="Contenue">
                            <input type="hidden" name="category_id" value="<?php echo $topic['category_id']; ?>" placeholder="forum_id" />
                            <input type="hidden" name="created_at" placeholder="created_at" />
                            <input type="hidden" name="is_published" value="1" placeholder="is_published" />
                            <input class="btn button mt-3 text-white" type="submit" name="savesubject" value="Valider" />
                        </div>
                    </form>

                    </div>

                </div>


<?php else: ?>

    <p class="ml-3">Aucun suject dans cette catégorie de forum...</p>

<?php endif; ?>

<footer class="mt-5">

    <?php require('partials/footer.php'); ?>

</footer>
</body>
</html>