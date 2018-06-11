<head>
    <link rel="stylesheet" href="assets/css/forumlist.css">

    <title>Power 28 : Forum </title>

</head>
<?php require ('Partials/nav.php');?>
<div class="col-12 mt-5 d-flex flex-column text-center">

        <h4>Subject : <?php echo $forum['name']; ?></h4>

        <p>Question : <?php echo $forum['content']; ?></p>
</div>

<div class="bg-white col-7 m-auto">

        <div class="d-flex flex-column container-fluid mt-5">


            <div class="bg-white">

                <?php if(!empty($commentaire)): ?>
                <?php foreach($commentaire as $key => $commentaireforum): ?>
                    <div class="row">
                        <p class="col-9 mt-4"><?php echo $commentaireforum['content']; ?></p>
                        <p class="col-3 mt-4">Publié le :<?php echo $commentaireforum['created_at']; ?></p>
                    </div>
                <?php endforeach; ?>
                <?php else: ?>
                <?php endif; ?>

            </div>
        </div>

        <div class="mt-5 col-12">

        <form action="index.php?page=forum&forum_id=<? echo $forum['id'] ?>" method="post" class="mt-5">
            <div class="form-group">
                <input type="text" name="content" class="form-control" id="formGroupExampleInput2" placeholder="Your Answers">
                <input type="hidden" name="forum_id" value="<?php echo $forum['id']; ?>" placeholder="forum_id" />
                <input type="hidden" name="created_at" placeholder="created_at" />
                <input type="hidden" name="is_published" value="1" placeholder="is_published" />
                <input class="btn btn-primary mt-3" type="submit" name="save" value="Valider" />
            </div>
        </form>

        </div>
</div>

