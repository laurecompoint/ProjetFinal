<?php require 'partials/head_assets.php'; ?>
<?php require 'partials/header.php'; ?>
<section class="col-8 m-auto">
    <div class="pb-3">
        <!-- Si $category existe, on affiche "Modifier" SINON on affiche "Ajouter" -->
        <h4><?php if(isset($faq)): ?>Modifier<?php else: ?>Ajouter<?php endif; ?> une catégorie</h4>
    </div>

    <?php if(isset($message)): //si un message a été généré plus haut, l'afficher ?>
        <div class="bg-danger text-white">
            <?php echo $message; ?>
        </div>
    <?php endif; ?>

    <!-- Si $category existe, chaque champ du formulaire sera pré-remplit avec les informations de la catégorie -->

    <form action="index.php?admin=faq_modif" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="question">Question :</label><br>
            <input class="form-control" <?php if(isset($faq)): ?>value="<?php echo $faq['question']?>"<?php endif; ?> type="text" placeholder="question" name="question" id="question" />
        </div>
        <div class="form-group">
            <label for="answer">Réponses :</label><br>
            <input class="form-control" <?php if(isset($faq)): ?>value="<?php echo $faq['answer']?>"<?php endif; ?> type="text" placeholder="answer" name="answer" id="answer" />
        </div>

        <div class="form-group">
            <label for="category_id"> Catégorie </label>
            <select class="form-control" name="category_id" id="category_id">
                <?php
                $queryCategory= $db ->query('SELECT * FROM category');
                while($category = $queryCategory->fetch()):
                    ?>
                    <option value="<?php echo $category['id']; ?>" <?php if(isset($faq) && $faq['category_id'] == $category['id']): ?>selected<?php endif; ?>> <?php echo $category['name']; ?> </option>

                <?php endwhile; ?>

            </select>
        </div>

        <div class="form-group">
            <label for="is_published"> Publié ?</label>
            <select class="form-control" name="is_published" id="is_published">
                <option value="0" <?php if(isset($faq) && $faq['is_published'] == 0): ?>selected<?php endif; ?>>Non</option>
                <option value="1" <?php if(isset($faq) && $faq['is_published'] == 1): ?>selected<?php endif; ?>>Oui</option>
            </select>
        </div>

        <div class="text-right mt-5">
            <!-- Si $category existe, on affiche un lien de mise à jour -->
            <?php if(isset($faq)): ?>
                <input class="btn button text-white" type="submit" name="update" value="Mettre à jour" />
                <!-- Sinon on afficher un lien d'enregistrement d'une nouvelle catégorie -->
            <?php else: ?>
                <input class="btn button text-white" type="submit" name="save" value="Enregistrer" />
            <?php endif; ?>
        </div>

        <!-- Si $category existe, on ajoute un champ caché contenant l'id de la catégorie à modifier pour la requête UPDATE -->
        <?php if(isset($faq)): ?>
            <input type="hidden" name="id" value="<?php echo $faq['id']?>" />
        <?php endif; ?>

    </form>
</section>