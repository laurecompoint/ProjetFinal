
<!DOCTYPE html>

<html>
<head>
    <link rel="stylesheet" href="assets/css/paiment.css">
    <title>Power 28 : Recap paiment</title>
</head>
<body class="body">
<?php require ('Partials/nav.php');?>

<div class="d-flex container-fluid justify-content-start align-items-center">

    <h1 class="mt-4">Votre commande</h1>

</div>

<div class="row container-fluid justify-content-start mt-5">

        <img src="assets/img/ordilogiciel.png" class="stock col-3" alt="stock"/>


    <div class="d-flex flex-column col-md-6 text-justify mt-5 align-items-start justify-content-center">

        <h2>Logiciel de stock : Power 28</h2>
        <p>Prix : 1200€</p>

    </div>
</div>
<div class="mt-5 container-fluid">

    <p>Prix total : 1200€</p>

    <form action="charge.php" method="post">
        <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                data-key="pk_test_UsC2qjBr6F3TWoWSrlkkexgS"
                data-description="Access for a year"
                data-amount="5000"
                data-locale="auto"></script>
    </form>
</div>




</body>
</html>