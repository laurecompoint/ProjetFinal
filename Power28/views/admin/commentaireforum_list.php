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
        <h4>Commentaire Forum List</h4>
        <a class="btn btn-primary" href="index.php?admin=commentaire_modif">Ajouter un commentaire</a>
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
            <th>Commentaire</th>
            <th>Date de publication</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>

        <?php if($commentaires): ?>
            <?php foreach($commentaires as $commentaire): ?>

                <tr>
                    <!-- htmlentities sert à écrire les balises html sans les interpréter -->
                    <th><?php echo htmlentities($commentaire['id']); ?></th>
                    <td><?php echo htmlentities($commentaire['content']); ?></td>
                    <td><?php echo htmlentities($commentaire['created_at']); ?></td>
                    <td class="row">
                        <a href="index.php?admin=commentaire_modif&commentaire_id=<?php echo $commentaire['id']; ?>&action=edit" class="btn btn-warning mr-1">Modifier</a>
                        <a onclick="return confirm('Are you sure?')" href="index.php?admin=commentaire_list&commentaire_id=<?php echo $commentaire['id']; ?>&action=delete" class="btn btn-danger">Supprimer</a>
                    </td>
                </tr>

            <?php endforeach; ?>
        <?php else: ?>
            Aucun commentaire enregistré.
        <?php endif; ?>

        </tbody>
    </table>

</section>



</body>
</html>