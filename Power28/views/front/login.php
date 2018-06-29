<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimum-scale=1.0">
    <meta hhtp-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/css/user.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
    <title>Power 28 : Connection/Inscription</title>

</head>
<body>

<?php require ('Partials/nav.php');?>


    <div class="row my-3 d-flex justify-content-center mt-5">

        <main class="col-7">


            <ul class="nav nav-tabs justify-content-center nav-fill"  role="tablist">
                <li class="nav-item">
                    <a  class="nav-link <?php if(isset($_POST['login']) || !isset($_POST['register'])): ?>active<?php endif; ?>" data-toggle="tab" href="#login" role="tab"><h4 class="mt-2">Connexion</h4></a>
                </li>
                <li class="nav-item">
                    <a  class="nav-link <?php if(isset($_POST['register'])): ?>active<?php endif; ?>" data-toggle="tab" href="#register" role="tab"><h4 class="mt-2">Inscription</h4></a>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane container-fluid <?php if(isset($_POST['login']) || !isset($_POST['register'])): ?>active<?php endif; ?>" id="login" role="tabpanel">

                    <form action="index.php?page=login" method="post" class="p-4 row flex-column">

                        <h4  class="pb-4 col-sm-8 offset-sm-2 mt-5">Connexion</h4>

                        <?php if(isset($loginmessage)): ?>
                            <div class="text-danger col-sm-8 offset-sm-2 mb-4"><?php echo $loginmessage; ?></div>
                        <?php endif; ?>

                        <div class="form-group col-sm-8 offset-sm-2">
                            <label for="email">Email</label>
                            <input class="form-control" value="" type="email" placeholder="Email" name="email" id="email" />
                        </div>

                        <div class="form-group col-sm-8 offset-sm-2">
                            <label for="password">Mot de passe</label>
                            <input class="form-control" value="" type="password" placeholder="Mot de passe" name="password" id="password" />
                        </div>

                        <div class="text-right col-sm-8 offset-sm-2">
                            <input class="btn button text-white" type="submit" name="login" value="Valider" />
                        </div>

                    </form>

                </div>
                <div class="tab-pane container-fluid <?php if(isset($_POST['register'])): ?>active<?php endif; ?>" id="register" role="tabpanel">

                    <form action="index.php?page=login" method="post" class="p-4 row flex-column">

                        <h4 class="pb-4 col-sm-8 offset-sm-2">Inscription</h4>

                        <?php if(isset($registermessage)): ?>
                            <div class="text-danger col-sm-8 offset-sm-2 mb-4"><?php echo $registermessage; ?></div>
                        <?php endif; ?>

                        <div class="form-group col-sm-8 offset-sm-2">
                            <label for="firstname">Prénom <b class="text-danger">*</b></label>
                            <input class="form-control" value="" type="text" placeholder="Prénom" name="firstname" id="firstname" />
                        </div>
                        <div class="form-group col-sm-8 offset-sm-2">
                            <label for="lastname">Nom de famille</label>
                            <input class="form-control" value="" type="text" placeholder="Nom de famille" name="lastname" id="lastname" />
                        </div>
                        <div class="form-group col-sm-8 offset-sm-2">
                            <label for="email">Email <b class="text-danger">*</b></label>
                            <input class="form-control" value="" type="email" placeholder="Email" name="email" id="email" />
                        </div>
                        <div class="form-group col-sm-8 offset-sm-2">
                            <label for="bio">Numéro de télèphone</label>
                            <textarea class="form-control" name="numerotel" id="telphone" placeholder="Téléphone"></textarea>
                        </div>
                        <div class="form-group col-sm-8 offset-sm-2">
                            <label for="bio">Nom de la societe</label>
                            <textarea class="form-control" name="entreprise" id="entreprise" placeholder="entreprise"></textarea>
                        </div>
                        <div class="form-group col-sm-8 offset-sm-2">
                            <label for="bio">Adresse</label>
                            <textarea class="form-control" name="adresse" id=adresse placeholder="Adresse"></textarea>
                        </div>
                        <div class="form-group col-sm-8 offset-sm-2">
                            <label for="bio">Ville/code postale</label>
                            <textarea class="form-control" name="ville" id="ville" placeholder="Ville / Code postale"></textarea>
                        </div>

                        <div class="form-group col-sm-8 offset-sm-2">
                            <label for="password">Mot de passe <b class="text-danger">*</b></label>
                            <input class="form-control" value="" type="password" placeholder="Mot de passe" name="password" id="password" />
                        </div>
                        <div class="form-group col-sm-8 offset-sm-2">
                            <label for="password_confirm">Confirmation du mot de passe <b class="text-danger">*</b></label>
                            <input class="form-control" value="" type="password" placeholder="Confirmation du mot de passe" name="password_confirm" id="password_confirm" />
                        </div>


                        <div class="text-right col-sm-8 offset-sm-2">
                            <p class="text-danger">* champs requis</p>
                            <input class="btn button text-white" type="submit" name="register" value="Valider" />
                        </div>

                    </form>

                </div>
            </div>
        </main>





</div>

</body>




</html>

