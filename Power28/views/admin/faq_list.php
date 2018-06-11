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
        <h4>Liste des FAQ</h4>
        <a class="btn btn-primary" href="index.php?admin=faq_modif">Ajouter FAQ</a>
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
            <th>Question</th>
            <th>Reponses</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>

        <?php if($faqs): ?>
            <?php foreach($faqs as $faq): ?>

                <tr>
                    <!-- htmlentities sert à écrire les balises html sans les interpréter -->
                    <th><?php echo htmlentities($faq['id']); ?></th>
                    <td><?php echo htmlentities($faq['question']); ?></td>
                    <td><?php echo htmlentities($faq['reponse']); ?></td>
                    <td>
                        <a href="index.php?admin=faq_modif&faq_id=<?php echo $faq['id']; ?>&action=edit" class="btn btn-warning">Modifier</a>
                        <a onclick="return confirm('Are you sure?')" href="index.php?admin=faq_modif&faq_id=<?php echo $faq['id']; ?>&action=delete" class="btn btn-danger">Supprimer</a>
                    </td>
                </tr>

            <?php endforeach; ?>
        <?php else: ?>
            Aucune catégorie enregistré.
        <?php endif; ?>

        </tbody>
    </table>

</section>



</body>
</html>