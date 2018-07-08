<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="assets/css/contacts.css">
    <title>Power 28 : Contact </title>
    <?php require ('Partials/nav.php');?>
</head>

<div class="contact d-flex justify-content-center">

    <h4 class="d-flex align-items-center text-white">Contactez-nous</h4>

</div>

<div class="col-6 mt-5 container">
    <form action="index.php?page=contact" method="post" class="mt-5">
    <div class="inputcontact form-group col-sm-8 offset-sm-2">
        <label for="email"><p>Email</p> </b></label>
        <input class="form-control" value="" type="email" placeholder="Email" name="email" id="email" />
    </div>
    <div class="inputcontact form-group col-sm-8 offset-sm-2">
        <label for="message"><p>Message</p> </b></label>
        <input class="form-control" value="" type="text" placeholder="Message" name="message" id="email" />
        <input class="btn button text-white mt-3" type="submit" name="envoyer" value="Envoyer" />
    </div>
    </form>
</div>
</html>

<?php require 'Partials/footer.php';?>