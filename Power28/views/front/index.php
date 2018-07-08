<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="assets/css/style.css">

    <title>Power 28!</title>
    <?php require ('Partials/nav.php');?>
</head>
<body>

    <div class="title d-flex flex-column text-center mt-5">
        <h1>Power 28</h1>
        <h1 class="">Un logiciel de stock : Pratique et Sécurisé</h1>
    </div>

    <div class="row mt-3 col-12">
        <div class="col-md-6 block d-flex justify-content-center mt-4">
            <img src="assets/img/stock.png" class="stock" alt="stock"/>
        </div>
        <div class="col-md-6 block d-flex justify-content-center mt-4">

            <img src="assets/img/ordilogiciel.png" class="softwareordi" alt="stock"/>
        </div>
    </div>

    <div class="row m-auto container-fluid">
        <div class="product d-flex flex-column justify-content-center col-md-7">
            <h2 class="mt-2">Notre Produit</h2>
            <p class="text-justify mt-2">Power 28 est un logiciel de gestion de stock multi-secteurs.
                Il permet de gérer et valoriser le stock d'une entreprise ainsi que réaliser
                un suivi des entrées et des sorties avec une granularité fine (avec de le détail de toutes les transactions).
            </p>
            <p class="text-justify">
                Power 28 a été développé en prenant en compte l'expérience utilisateur et la productivité nécessaire à
                une entreprise moderne. Son utilisation est très simple et l'interface de ce logiciel de gestion de stock
                a été pensé pour fonctionner également sur iPad avec un lecteur QR Code Bluetooth.


            </p>
            <p class="text-justify">
                Les fonctionnalités de Power 28 ont ensuite été étendues à tous types d'entreprises souhaitant connaître
                la valeur et le contenu de son stock et réaliser des entrées et sorties à l'aide de scan par QR-Code.
            </p>
            <div class="borderbuttonOne borderbutton text-center">
                <a href="index.php?page=product">Plus d'information</a>
            </div>
        </div>
        <div class="col-md-5 mt-5 d-flex justify-content-end">

            <img src="assets/img/logicielipad.png" class="col-7 softwareordi" alt="stock"/>

        </div>
    </div>

    <div class="row blockContact d-flex justify-content-around mt-3 col-12">

        <div class="blockContact d-flex flex-column col-md-3 align-items-center mt-5">
            <img src="assets/img/fonction.png" class="forum col-10 mt-5"/>
            <div class="borderbuttonOne borderbutton text-center mt-4">
                <a href="index.php?page=fonctionnalite">Fonctionnalités</a>
            </div>

        </div>

        <div class="blockContact d-flex flex-column col-md-3 align-items-center mt-5">
            <img src="assets/img/forumpeople.png" class="forum col-10 mt-5"/>
            <div class="borderbuttonOne borderbutton text-center mt-4">
                <a href="index.php?page=forum_list&category_id=1">Forum</a>
            </div>
        </div>
        <div class="blockContact d-flex flex-column col-md-3 align-items-center mt-5">
            <img src="assets/img/question.png" class="forum col-10 mt-5"/>
            <div class="borderbuttonOne borderbutton text-center mt-4">
                <a href="index.php?page=faq">FAQ</a>
            </div>

        </div>
    </div>

<div class="footer">
<?php require('Partials/footer.php'); ?>
</div>

</body>
</html>

