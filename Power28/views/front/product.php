
<head>
    <link rel="stylesheet" href="assets/css/product.css">
</head>
<body class="body">
<?php require ('Partials/nav.php');?>
<div class="row test container-fluid d-flex justify-content-between">
    <div class="d-flex flex-column col-md-5 logiciel mt-5">
        <h2>Power 28</h2>
        <img src="assets/img/logiciel.png" class="mt-3 stock" alt="stock"/>
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

        <h2>Option d'achat</h2>

        <div class="row">

            <div class="checkbox d-flex flex-column col-md-5 justify-content-start">

            <div class="custom-control custom-checkbox d-flex justify-content-between">
                <input type="checkbox" id="myCheck" class="mt-1"  onclick="myFunction()">
                <label class="" >Hebergements</label>
                <p class="ml-3 nombre2" name="nombre2" value="49">49€</p>
            </div>

            </div>

            <div class="flex-column col-md-7">
            <div class="row container-fluid">
                <P class="totaloption mt-3">Prix Total : </P>
                <p id="total" class="mt-3"></p>
            </div>

                <form class="d-flex justify-content-start" action="cart.php" method="post">
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

            <p>Nous sommes spécialisés dans l’hébergement de bases de données FileMaker depuis 2010.
                Nous utilisons une infrastructure moderne et flexible permettant de réduire les coûts tout en offrant
                une disponibilité maximale et une rapidité de connexion concurrentielle. 
                En choisissant votre hébergement auprès de Power28, vous faites le choix
                d’un prix bas, d’une qualité de réseau renforcée et d’une sécurité accrue car nous
                sauvegardons toutes nos bases de données toutes les 2 heures, tous les jours, toutes les semaines et tous les mois,
                sur 2 sites distants afin d’éviter toute perte de données.
            </p>

            <p>Détail sur le tarifs de l'Hébergement FileMaker</p>
            <p>RENOUVELLEMENT MENSUEL : 49€ H.T.<br>
                - Nombre de base ouverte : 1<br>
                - Espace disque : 10Go<br>
                - WebDirect et PHP : Oui<br>
                - Sauvegardes régulières : Journalières - Sauvegarde Distante : Oui<br>
                - Frais d’installation : Inclus<br>
            </p>

        <p class="text-justify">N'hésitez pas à consulter les fonctionnalités de Power28 afin d'appréhender toute la
            puissance de ce logiciel de gestion de stock.</p>

        <p class="text-justify">Une demande de démonstration est possible avec le formulaire présent dans notre page contact ainsi qu'une page pour répondres a des questions générales sur le logiciel.</p>

        <div class="row d-flex justify-content-start">
        <div class="borderbuttonOne borderbutton text-center ml-3">
            <a href="index.php?page=fonctionnalite" class="">Fonctionnalité du logiciel</a>
        </div>

        <div class="borderbuttonOne borderbutton text-center ml-3">
                <a href="index.php?page=contact">Contact par mail : desmonstration</a>
        </div>
        <div class="borderbuttonOne borderbutton text-center ml-3">
                <a href="index.php?page=faq_list&category_id=1">Réponses à vos questions</a>
        </div>
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
<div class="d-flex flex-column col-md-5 justify-content-end mb-5 mt-5">
    <div class="row logiciel mb-5">
        <div class="col-6 d-flex flex-column">
        <img src="assets/img/imprimente.png" class="etiquettes " alt="stock"/>
            <p class="text-center">LabelWriterTM 450</p>
        </div>
        <div class="col-6 d-flex flex-column">

        <img src="assets/img/etiquettes.png" class="etiquettes" alt="stock"/>
            <p class="text-center">Dymo 11352</p>
        </div>
    </div>
    <div class="row ">
        <div class="col-6 d-flex flex-column">
        <img src="assets/img/opticon.png" class="mt-5 scan" alt="stock"/>
            <p class="text-center">Opticon</p>
        </div>
        <div class="col-6 d-flex flex-column">
        <img src="assets/img/datalogic.png" class="mt-5 scan" alt="stock"/>
            <p class="text-center">Datalogic</p>
        </div>
    </div>
</div>
</div>

<?php require 'Partials/footer.php';?>
</body>

<script>

    function myFunction() {
        var checkBox = document.getElementById("myCheck");
        var text = document.getElementById("total");
        if (checkBox.checked == true){
            text.style.display = "block";
            var somme= 1200 + 49;
            $("<p>" + somme + "€" + "</p>").appendTo('#total');
        } else {
            text.style.display = "none";
        }
    }




</script>
