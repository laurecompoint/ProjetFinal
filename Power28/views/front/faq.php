
<nav class="col-12 py-2 d-flex justify-content-center categoryfaq">

	<ul class="mt-4 row">

        <?php foreach($categories as $category): ?>
		<a class="mr-5" href="index.php?page=faq_list&category_id=<?php echo $category['id']; ?>"><h4 class="text-center ml-2"><?php echo $category['name']; ?></h4></a>
		<?php endforeach; ?>


	</ul>
</nav>
