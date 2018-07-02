<!DOCTYPE html>
<html>
<body>

<?php require 'partials/head_assets.php'; ?>
<?php require 'partials/header.php'; ?>
<section class="col-8 m-auto">
    <div class="pb-3">

        <h4><?php if(isset($category)): ?>Modifier<?php else: ?>Ajouter<?php endif; ?> une catégorie</h4>
    </div>

    <?php if(isset($message)): ?>
        <div class="bg-danger text-white">
            <?php echo $message; ?>
        </div>
    <?php endif; ?>

    <form action="index.php?admin=category_modif" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Nom :</label><br>
            <input class="form-control" <?php if(isset($category)): ?>value="<?php echo $category['name']?>"<?php endif; ?> type="text" placeholder="Nom" name="name" id="name" />
        </div>

        <div class="text-right mt-5">
            <?php if(isset($category)): ?>
                <input class="btn button text-white" type="submit" name="update" value="Mettre à jour" />

            <?php else: ?>
                <input class="btn button text-white" type="submit" name="save" value="Enregistrer" />
            <?php endif; ?>
        </div>

        <?php if(isset($category)): ?>
            <input type="hidden" name="id" value="<?php echo $category['id']?>" />
        <?php endif; ?>

    </form>
</section>
</body>
</html>