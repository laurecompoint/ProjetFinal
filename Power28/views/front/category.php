<nav class="col-12 py-2 categories-nav">

  <ul class="mt-4 row subject d-flex justify-content-center">

      <?php foreach($categories as $category): ?>
        <a class="mr-5" href="index.php?page=forum_list&category_id=<?php echo $category['id']; ?>"><h4 class="text-center ml-2"><?php echo $category['name']; ?></h4></a>
      <?php endforeach; ?>


  </ul>
</nav>
