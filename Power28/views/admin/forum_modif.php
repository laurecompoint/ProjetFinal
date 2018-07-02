<!DOCTYPE html>
<html>
<?php require 'partials/head_assets.php'; ?>
<?php require 'partials/header.php'; ?>
<section class="col-8 m-auto">
    <div class="pb-3">
        <!-- Si $category existe, on affiche "Modifier" SINON on affiche "Ajouter" -->
        <h4><?php if(isset($forum)): ?>Modifier<?php else: ?>Ajouter<?php endif; ?> un forum</h4>
    </div>

    <?php if(isset($message)): //si un message a été généré plus haut, l'afficher ?>
        <div class="bg-danger text-white">
            <?php echo $message; ?>
        </div>
    <?php endif; ?>

    <!-- Si $category existe, chaque champ du formulaire sera pré-remplit avec les informations de la catégorie -->

    <form action="index.php?admin=forum_modif" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="subject">Subject forum :</label><br>
            <input class="form-control" <?php if(isset($forum)): ?>value="<?php echo $forum['name']?>"<?php endif; ?> type="text" placeholder="name" name="name" id="subjectname" />
        </div>
        <div class="form-group">
            <label for="summary">Résumer du suject :</label><br>
            <input class="form-control" <?php if(isset($forum)): ?>value="<?php echo $forum['content']?>"<?php endif; ?> type="text" placeholder="content" name="content" id="content" />
        </div>

        <div class="form-group">
            <label for="category_id"> Catégorie </label>
            <select class="form-control" name="category_id" id="category_id">
                <?php
                $queryCategory= $db ->query('SELECT * FROM category');
                while($category = $queryCategory->fetch()):
                    ?>
                    <option value="<?php echo $category['id']; ?>" <?php if(isset($forum) && $forum['category_id'] == $forum['id']): ?>selected<?php endif; ?>> <?php echo $category['name']; ?> </option>

                <?php endwhile; ?>

            </select>
        </div>
        <div class="form-group">
            <label for="is_published"> Publié ?</label>
            <select class="form-control" name="is_published" id="is_published">
                <option value="0" <?php if(isset($forum) && $forum['is_published'] == 0): ?>selected<?php endif; ?>>Non</option>
                <option value="1" <?php if(isset($forum) && $forum['is_published'] == 1): ?>selected<?php endif; ?>>Oui</option>
            </select>
        </div>

        <div class="text-right mt-5">
            <!-- Si $category existe, on affiche un lien de mise à jour -->
            <?php if(isset($forum)): ?>
                <input class="btn button text-white" type="submit" name="update" value="Mettre à jour" style="background-color: #55A3AF" />
                <!-- Sinon on afficher un lien d'enregistrement d'une nouvelle catégorie -->
            <?php else: ?>
                <input class="btn button text-white" type="submit" name="save" value="Enregistrer" />
            <?php endif; ?>
        </div>

        <!-- Si $category existe, on ajoute un champ caché contenant l'id de la catégorie à modifier pour la requête UPDATE -->
        <?php if(isset($forum)): ?>
            <input type="hidden" name="id" value="<?php echo $forum['id']?>" />
        <?php endif; ?>

    </form>
</section>
</html>