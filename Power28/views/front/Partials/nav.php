<?php require ('head_assets.php');?>

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
                      <a class="nav-link mt-2" href="index.php">Home </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link mt-2" href="index.php?page=product">Produit</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link mt-2" href="index.php?page=entreprise">Entreprise</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link mt-2" href="index.php?page=fonctionnalite">Fonctionnalitées</a>
                  </li>
                  <li class="nav-item mt-2">
                      <a class="nav-link" href="index.php?page=contact">Contact</a>
                  </li>
                  <?php if(isset($_SESSION['user'])) : ?>
                      <li class="nav-item dropdown">
                          <a class="nav-link" data-toggle="dropdown" href="#!" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-users" style="font-size:36px;"></i></a>
                          <div class="dropdown-menu dropdown-menu-right NavColor">
                              <a href="index.php?page=userprofil&user_id=<?php echo  $_SESSION['user']; ?>&action=edit">Vos Information</a>

                              <p><a class="m-auto d-block btn btn-danger col-9 text-center text-white" href="index.php?logout">Déconnexion</a></p>
                          </div>
                      </li>

                  <?php else: ?>
                  <li class="nav-item mt-2">
                      <a class="nav-link" href="index.php?page=user">Connection/Inscription</a>
                  </li>
                  <?php endif; ?>
              </ul>
          </div>

      </div>
  </nav>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>