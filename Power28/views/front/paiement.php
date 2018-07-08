<!DOCTYPE html>

<html>
<head>
    <link rel="stylesheet" href="assets/css/paiement.css">
    <title>Power 28 : Recap paiement</title>
    <?php require ('Partials/nav.php');?>
</head>
<body class="body">
<?php $originalAmount = $_SESSION['originalAmount'] ?>

<div class="d-flex container-fluid justify-content-start align-items-center">

    <h1 class="mt-4">Votre commande</h1>

</div>

<div class="row container-fluid justify-content-start mt-5">

    <img src="assets/img/ordilogiciel.png" class="stock col-3" alt="stock"/>


    <div class="d-flex flex-column col-md-6 text-justify align-items-start justify-content-center">

        <h2>Logiciel de stock : Power 28</h2>
        <p>Prix :<?= $originalAmount ?>€</p>

    </div>
</div>
<div class="mt-5 container-fluid">

    <p>Prix total : <?= $originalAmount ?>€</p>
    <form action="index.php?page=paiement" method="POST">
    <input type="hidden" class="form-control" name="customChekoutAmmount" id="customChekoutAmmount"  value="<?= $originalAmount ?>00" />
    <script id="stripe-checkout-script"
            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
            data-key="pk_test_gLTTgLN9jvWbk5NyLLbUdU6h"
            data-amount="<?= $originalAmount ?>00"
            data-name="Laure"
            data-description="Example charge"
            data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
            data-locale="auto"
            data-currency="eur">
    </script>
    </form>
</div>




</body>
</html>