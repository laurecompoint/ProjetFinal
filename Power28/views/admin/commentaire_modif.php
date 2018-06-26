<?php require 'partials/head_assets.php'; ?>
<?php require 'partials/header.php'; ?>
<section class="col-8 m-auto">
    <div class="pb-3">
        <!-- Si $category existe, on affiche "Modifier" SINON on affiche "Ajouter" -->
        <h4><?php if(isset($commentaire)): ?>Modifier<?php else: ?>Ajouter<?php endif; ?> un commentaire</h4>
    </div>

    <?php if(isset($message)): //si un message a été généré plus haut, l'afficher ?>
        <div class="bg-danger text-white">
            <?php echo $message; ?>
        </div>
    <?php endif; ?>

    <!-- Si $category existe, chaque champ du formulaire sera pré-remplit avec les informations de la catégorie -->

    <form action="index.php?admin=commentaire_modif" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Contenue du commentaire:</label><br>
            <input class="form-control" <?php if(isset($commentaire)): ?>value="<?php echo $commentaire['content']?>"<?php endif; ?> type="text" placeholder="content" name="content" id="content" />
        </div>

            <input class="form-control" type="hidden" <?php if(isset($commentaire)): ?>value="<?php echo $commentaire['created_at']?>"<?php endif; ?> type="text" placeholder="created_at" name="created_at" id="created_at" />

        <div class="form-group">
            <label for="is_published"> Publié ?</label>
            <select class="form-control" name="is_published" id="is_published">
                <option value="0" <?php if(isset($commentaire) && $commentaire['is_published'] == 0): ?>selected<?php endif; ?>>Non</option>
                <option value="1" <?php if(isset($commentaire) && $commentaire['is_published'] == 1): ?>selected<?php endif; ?>>Oui</option>
            </select>
        </div>
        <div class="form-group">
            <label for="category_id"> Catégorie </label>
            <select class="form-control" name="forum_id" id="forum_id">
                <?php
                $queryCategory= $db ->query('SELECT * FROM forum');
                while($forum = $queryCategory->fetch()):
                    ?>
                    <option value="<?php echo $forum['id']; ?>" <?php if(isset($commentaire) && $commentaire['forum_id'] == $forum['id']): ?>selected<?php endif; ?>> <?php echo $forum['name']; ?> </option>

                <?php endwhile; ?>

            </select>
        </div>

        <div class="text-right mt-5">
            <!-- Si $category existe, on affiche un lien de mise à jour -->
            <?php if(isset($commentaire)): ?>
                <input class="btn button text-white" type="submit" name="update" value="Mettre à jour" />
                <!-- Sinon on afficher un lien d'enregistrement d'une nouvelle catégorie -->
            <?php else: ?>
                <input class="btn button text-white" type="submit" name="save" value="Enregistrer" />
            <?php endif; ?>
        </div>

        <!-- Si $category existe, on ajoute un champ caché contenant l'id de la catégorie à modifier pour la requête UPDATE -->
        <?php if(isset($commentaire)): ?>
            <input type="hidden" name="id" value="<?php echo $commentaire['id']?>" />
        <?php endif; ?>

    </form>
</section>