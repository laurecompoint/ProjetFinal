<?php require 'partials/head_assets.php'; ?>
<?php require 'partials/header.php'; ?>
<section class="col-8 m-auto">
    <div class="pb-3">
        <!-- Si $category existe, on affiche "Modifier" SINON on affiche "Ajouter" -->
        <h4><?php if(isset($category)): ?>Modifier<?php else: ?>Ajouter<?php endif; ?> une catégorie</h4>
    </div>

    <?php if(isset($message)): //si un message a été généré plus haut, l'afficher ?>
        <div class="bg-danger text-white">
            <?php echo $message; ?>
        </div>
    <?php endif; ?>

    <!-- Si $category existe, chaque champ du formulaire sera pré-remplit avec les informations de la catégorie -->

    <form action="index.php?admin=category_modif" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Nom :</label><br>
            <input class="form-control" <?php if(isset($category)): ?>value="<?php echo $category['name']?>"<?php endif; ?> type="text" placeholder="Nom" name="name" id="name" />
        </div>

        <div class="text-right mt-5">
            <!-- Si $category existe, on affiche un lien de mise à jour -->
            <?php if(isset($category)): ?>
                <input class="btn btn-success" type="submit" name="update" value="Mettre à jour" />
                <!-- Sinon on afficher un lien d'enregistrement d'une nouvelle catégorie -->
            <?php else: ?>
                <input class="btn btn-success" type="submit" name="save" value="Enregistrer" />
            <?php endif; ?>
        </div>

        <!-- Si $category existe, on ajoute un champ caché contenant l'id de la catégorie à modifier pour la requête UPDATE -->
        <?php if(isset($category)): ?>
            <input type="hidden" name="id" value="<?php echo $category['id']?>" />
        <?php endif; ?>

    </form>
</section>