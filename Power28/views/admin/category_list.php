

	<head>
		<title>Administration des catégories - Power 28 !</title>
		<?php require 'partials/head_assets.php'; ?>
	</head>
	<body>
		<div class="container-fluid">

			<?php require 'partials/header.php'; ?>

            <?php require 'partials/nav.php'; ?>


				<section class="col-12 float-right d-flex flex-column mt-5">


					<div class="pb-4 d-flex justify-content-between">
						<h4>Liste des catégories</h4>
						<a class="btn btn-primary" href="index.php?admin=category_modif">Ajouter une catégorie</a>
					</div>

					<?php if(isset($message)): ?>
					<div class="bg-success text-white p-2 mb-4">
						<?php echo $message; ?>
					</div>
					<?php endif; ?>

					<table class="table table-striped">
						<thead class="">
							<tr class="">
                                <th>#</th>
								<th>Name</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>

							<?php if($categories): ?>
							<?php foreach($categories as $category): ?>

							<tr class="">
                                <th><?php echo htmlentities($category['id']); ?></th>
								<td><?php echo htmlentities($category['name']); ?></td>

								<td>
									<a href="index.php?admin=category_modif&category_id=<?php echo $category['id']; ?>&action=edit" class="btn btn-warning">Modifier</a>
									<a onclick="return confirm('Are you sure?')" href="index.php?admin=category_list&category_id=<?php echo $category['id']; ?>&action=delete" class="btn btn-danger">Supprimer</a>
								</td>
							</tr>

							<?php endforeach; ?>
							<?php else: ?>
								Aucune catégorie enregistré.
							<?php endif; ?>

						</tbody>
					</table>


				</section>

		</div>


	</body>

