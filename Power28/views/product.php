<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimum-scale=1.0">
    <meta hhtp-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="views/assets/css/produc.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
    <title>Power 28</title>

</head>
<body>

<nav>

  <?php require('partials/nav.php'); ?>

</nav>

<div class="row test container-fluid d-flex justify-content-between">
    <div class="d-flex flex-column col-md-5 logiciel mt-5">
        <h2>Power 28</h2>
        <img src="views/assets/img/logiciel.png" class="mt-3 stock" alt="stock"/>

    </div>

    <div class="d-flex flex-column col-md-6 text-justify mt-5">

        <h2 class="mt-5">Tarif de Power 28</h2>

        <p class="mt-2">Logiciel vendu 1200€ H.T.
            (Licence FileMaker Pro non incluse, voir : http://store.filemaker.com/)<br>
            - Licence unique par site, par entreprise.<br>
            - Nombre d'utilisateurs illimités.<br>
            - Formation de vos collaborateurs possible.<br>
            - Hébergement de votre base de donnée non inclus, voir la section Hébergement & FileMaker Server.
        </p>

        <h2>Les options d'achat</h2>

        <div class="row">

        <div class="checkbox d-flex flex-column col-5">

        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="customCheck1">
            <label class="custom-control-label" for="customCheck1">Hebergements</label>
            <p class="ml-3">Prix</p>
        </div>

        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="customCheck1">
            <label class="custom-control-label" for="customCheck1">Hebergements</label>
            <p class="ml-3">Prix</p>
        </div>

        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="customCheck1">
            <label class="custom-control-label" for="customCheck1">Hebergements</label>
            <p class="ml-3">Prix</p>
        </div>

        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="customCheck1">
            <label class="custom-control-label" for="customCheck1">Hebergements</label>
            <p class="ml-3">Prix</p>
        </div>

        </div>

            <div class="flex-column col-7">

                <P class="mt-5">Prix Total : 1200€</P>

                <form class="d-flex justify-content-start mt-5" action="cart.php" method="post">
                    <button class="borderbuttonOne" type="submit">Acheter</button>
                    <input type="hidden" name="product_id" value="<?php echo $product['id'] ?>">
                </form>

            </div>


        </div>



    </div>

</div>

    <div class="product d-flex flex-column col-md-12 text-justify">
        <h2 class="mt-5">Plus de détail sur le logiciel</h2>
        <p class="text-justify mt-2">Power28 est un logiciel de gestion de stock multi-secteur.
            Il permet de gérer et valoriser le stock d'une entreprise ainsi que réaliser
            un suivi des entrées et des sorties avec une granularité fine (avec de le détail de toutes les transactions).
        </p>


        <p>Power28 a été développé dans un premier temps pour le secteur medical, afin de réaliser un tracking
            du matériel ou consommables utilisés pour les patients mais aussi permettre une gestion correcte des dates de péremption et ainsi éviter les risques sanitaires.
            Les fonctionnalités de Power28 ont ensuite été étendues a
            ̀ tous types d'entreprises souhaitant connaître la valeur et le contenu de son stock et réaliser des
            entrées et sorties à l'aide de scan par QR-Code.
        </p>
        <p>Il permet entre autre de gérer les commandes auprès de vos fournisseurs pour optimiser votre processus de réapprovisionnement.
            La gestion des catégories, des fabricants, des fournisseurs, des lieux ainsi que son historique poussé
            font de Power28 un outil idéal pour gérer votre stock en toute sérénité, sans crainte de subir une rupture de stock ou
            de vendre un produit ou une denrée dont la date de péremption est dépassée.
        </p>
        <p class="text-justify">
            Power28 a été développé en prenant en compte l'expérience utilisateur et la productivité nécessaire à
            une entreprise moderne. Son utilisation est très simple et l'interface de ce logiciel de gestion de stock
            a été pensé pour fonctionner également sur iPad avec un lecteur QR Code Bluetooth.

        </p>
        <p>Pour la souplesse de développement ainsi que les facilités d'évolution, nous avons choisit de
            développer Power28 sur la plateforme de développement FileMaker (http://www.filemaker.com/fr/).
            Cela nous permet de répondre plus rapidement aux besoins des clients soucieux de maintenir un logiciel
            parfaitement à jour ou ceux qui souhaitent
            également ajouter à Power28 des fonctionnalités sur mesure.</p>

        <p class="text-justify">N'hésitez pas à consulter les fonctionnalités de Power28 afin d'appréhender toute la
            puissance de ce logiciel de gestion de stock.</p>

        <p class="text-justify">Une demande de démonstration est possible avec le formulaire présent dans notre page contact.</p>
        <div class="row d-flex justify-content-start">
        <div class="borderbuttonOne borderbutton text-center ml-3">
            <a href="#">Fonctionnalité</a>
        </div>

        <div class="borderbuttonOne borderbutton text-center ml-3">
                <a href="contact.php">Contact</a>
        </div>
        </div>


    </div>

    <div class="d-flex flex-column col-md-12 text-justify mt-4">


        <h2>Les réponses à vos question sur le logiciel par theme</h2>

        <div class="row d-flex justify-content-between">

           <div class="col-md-6 mt-5">
    <?php require 'partials/faq.php'; ?>
           </div>


            <div class="col-md-5">

    <img class="col-12 mt-5" src="views/assets/img/faq.jpg"/>

            </div>


    </div>

    </div>

<div class="row container-fluid d-flex justify-content-between">
<div class="d-flex flex-column col-md-6 text-justify mt-4">

    <h2>Recommendation pour le logiciel</h2>

    <p>Pour les etiquettes :</p>
    <p>Pour l'impression de vos étiquettes nous vous recommandons le modèle d'imprimante suivant :
        LabelWriterTM 450 (http://www.dymo.com/fr-FR/labelwriter-450-label-printer)
        Ainsi que les étiquettes suivantes : <br>
        Dymo 11352 [Return Address (https://www.dymo.eu/dymo-11352-return- address-labels-25x54mm.html)
    </p>
    <p>Pour les scans :</p>
    <p>Pour vos scans QR code en bluetooth (iDevices : iPhone, iPad | Mac ou PC) nous vous
        recommandons le/les modèles suivants compatible avec le logiciel :<br>
    </p>

    Opticon : L'OPI-3301i est un scanner portatif léger, confortable et sans fil doté
    d'une poignée pistolet. Il a un puissant imageur CMOS pour scanner à la fois 1D et 2D.
    La connexion Bluetooth assure un transfert de données en temps réel vers votre système.
    <br>Lien : http://opticon.com/product/opi-3301i/</p>

    <p>Autre possibilitées : </p>

        <p>HoneyWell : https://country.honeywellaidc.com/fr-FR/Pages/Category.aspx?category=2d-barcode- scanner&cat=HSM
        <br>Datalogic : https://www.datalogic.com/fra/produits/points-de-vente/lecteurs-manuels/rida-dbt6400-retail- pd-714.html
        </p>

</div>
<div class="d-flex flex-column col-md-5 justify-content-end mb-5">
    <div class="row logiciel mb-5">
        <div class="col-6 d-flex flex-column">

        <img src="views/assets/img/imprimente.jpg" class="etiquettes col-12" alt="stock"/>
            <p class="text-center">LabelWriterTM 450</p>

        </div>
        <div class="col-6 d-flex flex-column">

        <img src="views/assets/img/etiquettes.jpg" class="etiquettes col-12" alt="stock"/>
            <p class="text-center">Dymo 11352</p>
        </div>
    </div>
    <div class="row logiciel ">
        <div class="col-6 d-flex flex-column">
        <img src="views/assets/img/opticon.png" class="mt-5 scan col-12" alt="stock"/>
            <p class="text-center">Opticon</p>
        </div>
        <div class="col-6 d-flex flex-column">
        <img src="views/assets/img/datalogic.jpg" class="mt-5 scan col-12" alt="stock"/>
            <p class="text-center">Datalogic</p>
        </div>
    </div>
</div>
</div>



<div class="mt-5">

    <?php require('partials/footer.php'); ?>


</div>


</body>
</html>
