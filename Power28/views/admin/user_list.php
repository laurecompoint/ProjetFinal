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
        <h4>Liste des utilisateurs</h4>
        <a class="btn btn-primary" href="index.php?admin=user_modif">Ajouter un utilisateur</a>
    </div>

    <?php if(isset($message)): //si un message a été généré plus haut, l'afficher ?>
        <div class="bg-success text-white p-2 mb-4">
            <?php echo $message; ?>
        </div>
    <?php endif; ?>

    <?php if($users): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Admin</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($users as $user): ?>

                <tr>
                    <!-- htmlentities sert à écrire les balises html sans les interpréter -->
                    <th><?php echo htmlentities($user['id']); ?></th>
                    <td><?php echo htmlentities($user['firstname']); ?></td>
                    <td><?php echo htmlentities($user['lastname']); ?></td>
                    <td><?php echo htmlentities($user['email']); ?></td>
                    <td><?php echo htmlentities($user['is_admin']); ?></td>
                    <td>
                        <a href="index.php?admin=user_modif&user_id=<?php echo $user['id']; ?>&action=edit" class="btn btn-warning">Modifier</a>
                        <a onclick="return confirm('Are you sure?')" href="index.php?admin=user_list&user_id=<?php echo $user['id']; ?>&action=delete" class="btn btn-danger">Supprimer</a>
                    </td>
                </tr>

            <?php endforeach; ?>

            </tbody>
        </table>
    <?php else: ?>
        Aucun utilisateur enregistré.
    <?php endif; ?>

</section>

</body>
</html>