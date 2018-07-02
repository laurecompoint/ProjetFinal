<!DOCTYPE html>
<html>
<head>

    <title>Administration - Power 28!</title>

    <?php require 'partials/head_assets.php'; ?>

</head>
<body>

<?php require('partials/header.php'); ?>

<?php require('partials/nav.php'); ?>


<section class="col-12 mt-5">
    <div class="pb-4 d-flex justify-content-between">
        <h4>Forum List</h4>
        <a class="btn btn-primary" href="index.php?admin=forum_modif">Ajouter un Forum</a>
    </div>

    <?php if(isset($message)): //si un message a été généré plus haut, l'afficher ?>
        <div class="bg-success text-white p-2 mb-4">
            <?php echo $message; ?>
        </div>
    <?php endif; ?>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Subject</th>
            <th>Publié</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>

        <?php if($forums): ?>
            <?php foreach($forums as $forum): ?>

                <tr>
                    <!-- htmlentities sert à écrire les balises html sans les interpréter -->
                    <th><?php echo htmlentities($forum['id']); ?></th>
                    <td><?php echo htmlentities($forum['name']); ?></td>
                    <td><?php echo htmlentities($forum['created_at']); ?></td>
                    <td>
                        <a href="index.php?admin=forum_modif&forum_id=<?php echo $forum['id']; ?>&action=edit" class="btn btn-secondary">Modifier</a>
                        <a onclick="return confirm('Are you sure?')" href="index.php?admin=forum_list&forum_id=<?php echo $forum['id']; ?>&action=delete" class="btn btn-danger">Supprimer</a>
                    </td>
                </tr>

            <?php endforeach; ?>
        <?php else: ?>
            Aucun forum enregistré.
        <?php endif; ?>

        </tbody>
    </table>

</section>



</body>
</html>