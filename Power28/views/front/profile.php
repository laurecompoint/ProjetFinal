<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="assets/css/user.css">

    <title>Power 28 : User profil</title>

</head>
<body class="body">

<?php require 'Partials/nav.php'; ?>


<div class="container-fluid">

    <div class="row my-3 d-flex justify-content-center">

        <div class="logouser col-md-2">

            <i class="fas fa-users" style="font-size:100px;"></i>
        </div>
        <main class="col-md-9">

            <form action="index.php?page=profile" method="post" class="p-4 row flex-column" enctype="multipart/form-data">

                <h4 class="pb-4 col-sm-8">Mise à jour des informations utilisateur</h4>

                <?php if(isset($updateMessage)): ?>
                    <div class="text-danger col-sm-8 offset-sm-2 mb-4"><?php echo $updateMessage; ?></div>
                <?php endif; ?>

                <div class="form-group col-sm-8">
                    <label for="firstname">Prénom <b class="text-danger">*</b></label>
                    <input class="form-control" value="<?php echo $user['firstname']?>" type="text" placeholder="Prénom" name="firstname"   />
                </div>
                <div class="form-group col-sm-8">
                    <label for="lastname">Nom de famille <b class="text-danger">*</b></label>
                    <input class="form-control" value="<?php echo $user['lastname']?>" type="text" placeholder="Nom de famille" name="lastname"  />
                </div>
                <div class="form-group col-sm-8">
                    <label for="compagny">Entreprise <b class="text-danger">*</b></label>
                    <input class="form-control" value="<?php echo $user['compagny']?>" type="text" placeholder="Entreprise" name="compagny"  />
                </div>
                <div class="form-group col-sm-8">
                    <label for="tel">Numero Téléphone <b class="text-danger">*</b></label>
                    <input class="form-control" value="<?php echo $user['tel']?>" name="tel" type="number"  placeholder="téléphone">
                </div>
                <div class="form-group col-sm-8">
                    <label for="adresse">Adresse <b class="text-danger">*</b></label>
                    <input class="form-control" value="<?php echo $user['adresse']?>" name="adresse" placeholder="adresse">
                </div>
                <div class="form-group col-sm-8">
                    <label for="city">Ville <b class="text-danger">*</b></label>
                    <input class="form-control" value="<?php echo $user['city']?>" name="city"  placeholder="ville">
                </div>
                <div class="form-group col-sm-8">
                    <label for="email">Email <b class="text-danger">*</b></label>
                    <input class="form-control" value="<?php echo $user['email']?>" type="email" placeholder="Email" name="email"/>
                </div>
                <div class="form-group col-sm-8">
                    <label for="password">Mot de passe (uniquement si vous souhaitez modifier votre mot de passe actuel)</label>
                    <input class="form-control" value="" type="password" placeholder="Mot de passe" name="password" id="password" />
                </div>
                <div class="form-group col-sm-8">
                    <label for="password_confirm">Confirmation du mot de passe (uniquement si vous souhaitez modifier votre mot de passe actuel)</label>
                    <input class="form-control" value="" type="password" placeholder="Confirmation du mot de passe" name="password_confirm" id="password_confirm" />
                </div>


                <div class="text-right col-sm-8">
                    <p class="text-danger">* champs requis</p>
                    <input class="btn button text-white" type="submit" name="update" value="Valider" />
                </div>

            </form>
        </main>


    </div>


</div>
<?php require 'Partials/footer.php';?>
</body>
</html>