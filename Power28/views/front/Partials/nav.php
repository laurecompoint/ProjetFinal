<?php require ('views/front/Partials/head_assets.php');?>
<link rel="stylesheet" href="assets/css/footernav.css">

  <nav class="navbar navbar-expand-lg NavColor">

      <img src="assets/img/logopower28.png" alt="logoPower28" class="mr-auto" id="logo" />

      <button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="d-flex justify-content-end">

          <div class="collapse navbar-collapse" id="navbarSupportedContent">

              <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                      <a class="nav-link" href="index.php">Home </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="index.php?page=product">Produit</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="index.php?page=faq_list&category_id=1">FAQ</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="index.php?page=entreprise">Entreprise</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="index.php?page=fonctionnalite">Fonctionnalitées</a>
                  </li>
                  <?php if(isset($_SESSION['user'])) : ?>

                      <a class="m-auto d-block btn danger text-center text-white" href="index.php?logout">Déconnexion</a>

                  <?php else: ?>
                  <li class="nav-item">
                      <a class="nav-link" href="index.php?page=user">Connection/Inscription</a>
                  </li>
                  <?php endif; ?>
              </ul>
          </div>

      </div>
  </nav>
