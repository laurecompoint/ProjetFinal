<head>
  <link rel="stylesheet" href="assets/css/forumlist.css">

  <title>Power 28 : Forum </title>

</head>
<?php require ('Partials/nav.php');?>
<div class="subjectforum d-flex flex-column justify-content-center">
    <?php require 'subject.php'; ?>
</div>
<?php if(!empty($forums)): ?>

                <div class="col-md-9 mt-5">

                    <h2>Nos sujects de forum sur le logiciel</h2>

                </div>

                <div class="row col-md-12 mt-5">

                    <?php foreach($forums as $key => $topic): ?>
                    <div class="col-6">
                        Sujet : <a class="col-6" href="index.php?page=forum&forum_id=<?php echo $topic['id']; ?>"><?php echo $topic['name']; ?></a>
                    </div>
                    <div class="col-6">
                         <p class="col-6" ><?php echo $topic['created_at']; ?></p>
                    </div>
                     <?php endforeach; ?>

                </div>



                <div class="mt-5 col-md-9">

                    <h2>Ajouter un sujet</h2>

                    <form action="index.php?page=forum_list&category_id=<?php echo $forum['category_id'] ?>" method="post">
                        <div class="form-group col-5 mt-5">
                            <label>Titre du suject</label>
                            <input type="text" name="name" class="form-control" id="formGroupExampleInput2" placeholder="Title Subject"> <br>
                            <label>Contenue de vôtre suject</label>
                            <input type="text" name="content" class="form-control" id="formGroupExampleInput2" placeholder="Contenue">
                            <input type="hidden" name="category_id" value="<?php echo $forum['category_id']; ?>" placeholder="forum_id" />
                            <input type="hidden" name="created_at" placeholder="created_at" />
                            <input type="hidden" name="is_published" value="1" placeholder="is_published" />
                            <button type="button" name="savesubject" class="btn btn-primary mt-4">Envoyer</button>
                        </div>
                    </form>

                </div>



<?php else: ?>



                <div class="d-flex flex-column col-12">

                    <div class=" mt-5 ">
                        <p class="ml-3">Aucun suject dans cette catégorie de forum...</p>

                    </div>

                    <div class="mt-5">

                        <h2>Ajouter un sujet</h2>

                        <form action="index.php?page=forum_list" method="post">
                            <div class="form-group col-5 mt-5">
                                <label>Titre du suject</label>
                                <input type="text" name="name" class="form-control" id="formGroupExampleInput2" placeholder="Title Subject"> <br>
                                <label>Contenue de vôtre suject</label>
                                <input type="text" name="content" class="form-control" id="formGroupExampleInput2" placeholder="Contenue">
                                <input type="hidden" name="category_id" value="<?php echo $forum['id']; ?>" placeholder="forum_id" />
                                <input type="hidden" name="created_at" placeholder="created_at" />                                <input type="hidden" name="is_published" value="1" placeholder="is_published" />
                                <button type="button" name="savesubject" class="btn btn-primary mt-4">Envoyer</button>
                            </div>
                        </form>

                    </div>


                </div>

    <?php endif; ?>

<footer>

    <?php require('partials/footer.php'); ?>

</footer>