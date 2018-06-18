<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="assets/css/user.css">

    <title>Power 28 : User profil</title>
<body class="article-body">
</head>


<?php require 'partials/nav.php'; ?>

</head>

<div class="container-fluid">



    <div class="row my-3 article-content">



        <main class="col-9">

            <form action="index.php?page=userprofil" method="post" class="p-4 row flex-column">

                <h4 class="pb-4 col-sm-8 offset-sm-2">Mise à jour des informations utilisateur</h4>

                <?php if(isset($updateMessage)): ?>
                    <div class="text-danger col-sm-8 offset-sm-2 mb-4"><?php echo $updateMessage; ?></div>
                <?php endif; ?>

                <div class="form-group col-sm-8 offset-sm-2">
                    <label for="firstname">Prénom <b class="text-danger">*</b></label>
                    <input class="form-control" value="<?php echo $user['firstname']?>" type="text" placeholder="Prénom" name="firstname" id="firstname" />
                </div>
                <div class="form-group col-sm-8 offset-sm-2">
                    <label for="lastname">Nom de famille</label>
                    <input class="form-control" value="<?php echo $user['lastname']?>" type="text" placeholder="Nom de famille" name="lastname" id="lastname" />
                </div>
                <div class="form-group col-sm-8 offset-sm-2">
                    <label for="bio">Numero Téléphone</label>
                    <textarea class="form-control" name="numerotel" id="bio" placeholder="Ta vie Ton oeuvre..."><?php echo $user['numerotel']?></textarea>
                </div>
                <div class="form-group col-sm-8 offset-sm-2">
                    <label for="bio">Adresse</label>
                    <textarea class="form-control" name="adresse" id="bio" placeholder="Ta vie Ton oeuvre..."><?php echo $user['adresse']?></textarea>
                </div>
                <div class="form-group col-sm-8 offset-sm-2">
                    <label for="bio">Ville</label>
                    <textarea class="form-control" name="ville" id="bio" placeholder="Ta vie Ton oeuvre..."><?php echo $user['ville']?></textarea>
                </div>
                <div class="form-group col-sm-8 offset-sm-2">
                    <label for="email">Email <b class="text-danger">*</b></label>
                    <input class="form-control" value="<?php echo $user['email']?>" type="email" placeholder="Email" name="email" id="email" />
                </div>
                <div class="form-group col-sm-8 offset-sm-2">
                    <label for="password">Mot de passe (uniquement si vous souhaitez modifier votre mot de passe actuel)</label>
                    <input class="form-control" value="" type="password" placeholder="Mot de passe" name="password" id="password" />
                </div>
                <div class="form-group col-sm-8 offset-sm-2">
                    <label for="password_confirm">Confirmation du mot de passe (uniquement si vous souhaitez modifier votre mot de passe actuel)</label>
                    <input class="form-control" value="" type="password" placeholder="Confirmation du mot de passe" name="password_confirm" id="password_confirm" />
                </div>


                <div class="text-right col-sm-8 offset-sm-2">
                    <p class="text-danger">* champs requis</p>
                    <input class="btn btn-success" type="submit" name="update" value="Valider" />
                </div>

            </form>
        </main>
    </div>



</div>
</body>
</html>

