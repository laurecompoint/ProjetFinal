<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="assets/css/forums.css">
    <title>Power 28 : Forum </title>
</head>
<body class="body">
<div class="navheader">
    <?php require ('Partials/nav.php');?>
</div>
<div class="d-flex justify-content-center headercontainer col-12">
<div class="header text-center">

        <h2 class="mt-4">Subject : <?php echo $forum['name']; ?></h2>

        <p>Question : <?php echo $forum['content']; ?></p>
        <div class="progress-container">
            <div class="progress-bar" id="myBar"></div>
        </div>
</div>
</div>
<div class="bg-white m-auto widthblock">

        <div class="d-flex flex-column container-fluid mt-5">

            <?php if(isset($message)): ?>
                <div class="text-danger col-sm-8 offset-sm-2 mb-4"><?php echo $message; ?></div>
            <?php endif; ?>

            <div class="bg-white content">

                <?php if(!empty($commentaire)): ?>
                <?php foreach($commentaire as $key => $commentaireforum): ?>

                        <div class="d-flex flex-column justify-content-start">

                            <p class="mt-4">Auteur :<?php echo htmlentities($commentaireforum['author']);  ?></p>

                            <div class="row">
                                <p class="col-9"><?php echo htmlentities($commentaireforum['content']);  ?></p>
                                <p class="col-3">Publié le :<?php echo htmlentities($commentaireforum['created_at']) ; ?></p>
                            </div>
                        </div>

                <?php endforeach; ?>
                <?php else: ?>
                <?php endif; ?>

            </div>
        </div>

    <div class="mt-5 col-12">

        <?php if(isset($_SESSION['user'])) : ?>

            <hr>

            <h3>Espace commentaire</h3>

            <form action="index.php?page=forum&forum_id=<? echo $forum['id'] ?>" method="post" class="mt-5">
                <div class="form-group">
                    <input type="hidden" name="author" value="<?php echo $_SESSION['user']; ?>" class="form-control" id="formGroupExampleInput2" placeholder="Your name">
                    <input type="text" name="content" class="form-control" id="formGroupExampleInput2" placeholder="Your Answers">
                    <input type="hidden" name="forum_id" value="<?php echo $forum['id']; ?>" placeholder="forum_id" />
                    <input type="hidden" name="created_at" placeholder="created_at" />
                    <input type="hidden" name="is_published" value="1" placeholder="is_published" />
                    <input class="btn button mt-3 text-white" type="submit" name="save" value="Valider" />
                </div>
            </form>
        <?php else: ?>
        <?php endif; ?>
    </div>
</div>
</body>
</html>
<script>
    window.onscroll = function() {myFunction()};

    function myFunction() {
        var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
        var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        var scrolled = (winScroll / height) * 100;
        document.getElementById("myBar").style.width = scrolled + "%";
    }
</script>