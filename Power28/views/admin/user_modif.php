<?php require 'partials/head_assets.php'; ?>
<?php require 'partials/header.php'; ?>
<section class="col-8 m-auto">
    <div class="pb-3">
        <!-- Si $category existe, on affiche "Modifier" SINON on affiche "Ajouter" -->
        <h4><?php if(isset($user)): ?>Modifier<?php else: ?>Ajouter<?php endif; ?> un utilisateur</h4>
    </div>

    <?php if(isset($message)): //si un message a été généré plus haut, l'afficher ?>
        <div class="bg-danger text-white">
            <?php echo $message; ?>
        </div>
    <?php endif; ?>

    <!-- Si $category existe, chaque champ du formulaire sera pré-remplit avec les informations de la catégorie -->

    <form action="index.php?admin=user_modif" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Firstname:</label><br>
            <input class="form-control" <?php if(isset($user)): ?>value="<?php echo $user['firstname']?>"<?php endif; ?> type="text" placeholder="firstname" name="firstname" id="firstname" />
        </div>
        <div class="form-group">
            <label for="name">Lastname:</label><br>
            <input class="form-control" <?php if(isset($user)): ?>value="<?php echo $user['lastname']?>"<?php endif; ?> type="text" placeholder="lastname" name="lastname" id="lastname" />
        </div>
        <div class="form-group">
            <label for="name">Entreprise:</label><br>
            <input class="form-control" <?php if(isset($user)): ?>value="<?php echo $user['entreprise']?>"<?php endif; ?> type="text" placeholder="entreprise" name="entreprise" id="entreprise" />
        </div>
        <div class="form-group">
            <label for="is_admin"> Admin ?</label>
            <select class="form-control" name="is_admin" id="is_admin">
                <option value="0" <?php if(isset($user) && $user['is_admin'] == 0): ?>selected<?php endif; ?>>Non</option>
                <option value="1" <?php if(isset($user) && $user['is_admin'] == 1): ?>selected<?php endif; ?>>Oui</option>
            </select>
        </div>
        <div class="form-group">
            <label for="name">Adresse</label><br>
            <input class="form-control" <?php if(isset($user)): ?>value="<?php echo $user['adresse']?>"<?php endif; ?> type="text" placeholder="adresse" name="adresse" id="adresse" />
        </div>
        <div class="form-group">
            <label for="name">Ville</label><br>
            <input class="form-control" <?php if(isset($user)): ?>value="<?php echo $user['ville']?>"<?php endif; ?> type="text" placeholder="ville" name="ville" id="ville" />
        </div>
        <div class="form-group">
            <label for="name">Numéro Téléphone</label><br>
            <input class="form-control" <?php if(isset($user)): ?>value="<?php echo $user['numerotel']?>"<?php endif; ?> type="text" placeholder="numerotel" name="numerotel" id="numerotel" />
        </div>
        <div class="form-group">
            <label for="name">Mail</label><br>
            <input class="form-control" <?php if(isset($user)): ?>value="<?php echo $user['email']?>"<?php endif; ?> type="text" placeholder="email" name="email" id="email" />
        </div>
        <div class="form-group">
            <label for="name">Mot de passe</label><br>
            <input class="form-control" <?php if(isset($user)): ?>value="<?php echo $user['password']?>"<?php endif; ?> type="text" placeholder="password" name="password" id="password" />
        </div>

        <div class="text-right mt-5">
            <!-- Si $category existe, on affiche un lien de mise à jour -->
            <?php if(isset($user)): ?>
                <input class="btn button text-white" type="submit" name="update" value="Mettre à jour" />
                <!-- Sinon on afficher un lien d'enregistrement d'une nouvelle catégorie -->
            <?php else: ?>
                <input class="btn button text-white" type="submit" name="save" value="Enregistrer" />
            <?php endif; ?>
        </div>

        <!-- Si $category existe, on ajoute un champ caché contenant l'id de la catégorie à modifier pour la requête UPDATE -->
        <?php if(isset($user)): ?>
            <input type="hidden" name="id" value="<?php echo $user['id']?>" />
        <?php endif; ?>

    </form>
</section>