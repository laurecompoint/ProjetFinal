<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="assets/css/user.css">
    <title>Power 28 : Connection/Inscription</title>
    <?php require ('Partials/nav.php');?>
</head>
<body class="body">

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
                            <input class="form-control"  type="text" placeholder="Prénom" name="firstname" id="firstname" />
                        </div>
                        <div class="form-group col-sm-8 offset-sm-2">
                            <label for="lastname">Nom de famille <b class="text-danger">*</b></label>
                            <input class="form-control"  type="text" placeholder="Nom de famille" name="lastname" id="lastname" />
                        </div>
                        <div class="form-group col-sm-8 offset-sm-2">
                            <label for="email">Email <b class="text-danger">*</b></label>
                            <input class="form-control" type="email" placeholder="Email" name="email" id="email" />
                        </div>
                        <div class="form-group col-sm-8 offset-sm-2">
                            <label for="tel">Numéro de télèphone <b class="text-danger">*</b></label>
                            <input class="form-control" name="tel" id="phone" type="number" placeholder="Téléphone">
                        </div>
                        <div class="form-group col-sm-8 offset-sm-2">
                            <label for="compagny">Nom de la societe <b class="text-danger">*</b></label>
                            <input class="form-control" name="compagny" id="compagny" placeholder="Entreprise">
                        </div>
                        <div class="form-group col-sm-8 offset-sm-2">
                            <label for="adresse">Adresse <b class="text-danger">*</b></label>
                            <textarea class="form-control" name="adresse" id="map" placeholder="Adresse"></textarea>
                        </div>
                        <div class="form-group col-sm-8 offset-sm-2">
                            <label for="city">Ville/code postale <b class="text-danger">*</b></label>
                            <textarea class="form-control" name="city" id="city" placeholder="Ville / Code postale"></textarea>
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

