<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="assets/css/entreprise.css">
    <title>Power 28 : Entreprise</title>

</head>
<body class="body">
<?php require ('Partials/nav.php');?>
<div class="compagny d-flex justify-content-start align-items-center container-fluid">


    <div class="bg-white presentation d-flex justify-content-center align-items-center flex-column text-justify text-center">
        <h3 class="text-right text">Présentation de notre entreprise</h3>
        <p class="ml-2">Notre emtreprise se base principalement à Toulouse mais aussi à Paris pour nos clients
            les plus fidèles.
        </p>
        <p class="ml-2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
            laoreet dolore magna aliquam erat volutpat rtis.
        </p>

    </div>

</div>

<div class="d-flex flex-column justify-content-between m-auto bg-white">

        <div class="row d-flex justify-content-center mt-3">

            <div class="col-5">
                <p><i class="fas fa-map-marker" style="font-size:20px;"></i>Adresse : Toulouse </p>
                <p>32 Allée Jean Jaurès, 31000 Toulouse</p>
            </div>
            <div class="row col-4">
                <p><i class="fas fa-envelope-open" style="font-size:20px;"></i> Mail : </p>
                <p>Toulouse@gmail.com</p>
            </div>
            <div class="row col-3">
                <p><i class="fas fa-phone-square" style="font-size:20px;"></i>

                    Tel : </p>
                <p>0145677890</p>
            </div>

        </div>

        <div class="row d-flex justify-content-center">

            <div class="col-5"
                <p><i class="fas fa-map-marker" style="font-size:20px;"></i>Adresse : Paris</p>

                <p>  16 Rue de l'Arcade, 75008 Paris</p>
            </div>
            <div class="row col-4">
                <p><i class="fas fa-envelope-open" style="font-size:20px;"></i>  Mail : </p>
                <p>Paris@gmail.com</p>
            </div>
            <div class="row col-3">
                <p><i class="fas fa-phone-square" style="font-size:20px;"></i> Tel : </p>
                <p>0145677890</p>
            </div>

        </div>

</div>


<div class="container-fluid mt-4 text-justify">

<div class="row">
    <div class="col-md-7">
    <h5>Spécialisé dans l'hebergement</h5>

    <p>Nous sommes spécialisés dans l’hébergement de bases de données FileMaker depuis 2010.
        Nous utilisons une infrastructure moderne et flexible permettant de réduire les coûts tout en offrant
        une disponibilité maximale et une rapidité de connexion concurrentielle. 
        En choisissant votre hébergement auprès de Power28, vous faites le choix
        d’un prix bas, d’une qualité de réseau renforcée et d’une sécurité accrue car nous
        sauvegardons toutes nos bases de données toutes les 2 heures, tous les jours, toutes les semaines et tous les mois,
        sur 2 sites distants afin d’éviter toute perte de données.
    </p>
    <p>
        Coût, Qualité, Sécurité, Disponibilité  : Ce sont les 4 maîtres-mots de Power 28 concernant l’hébergement
        FileMaker et l’hébergement de vos bases de données d’entreprise.
        1 seul prix simple et accessible pour votre base de donnée.
    </p>
    <p>Détail sur le tarifs de l'Hébergement FileMaker</p>
    <p>RENOUVELLEMENT MENSUEL : 49€ H.T.<br>
        Détail sur l'herbergement : <br>
        - Nombre de base ouverte : 1<br>
        - Espace disque : 10Go<br>
        - WebDirect et PHP : Oui<br>
        - Sauvegardes régulières : Journalières - Sauvegarde Distante : Oui<br>
        - Frais d’installation : Inclus<br>
    </p>
    </div>
    <div class="col-md-5">
        <img src="assets/img/filemaker.png" alt="hebergement" class="col-7 rounded mx-auto d-block mt-5"/>

    </div>
</div>
    <h5>Nôtre produit : Power 28 </h5>

    <p>Pourquoi le nom de Power 28 ?</p>

    <p>Power comme la puissance, notre souci a été d'améliorer la puissance de gestion de toutes les entreprises
        souhaitant affiner les processus de gestion de stock.
        28 comme 28 jours, 4 semaines, 1 mois, une rotation parfaite comme les fonctionnalités de
        rotation de stock FIFO (First In First Out : Premier Entré Premier Sortit) ou FEFO (First Expired First Out :
        Premier Expiré Premier Sortit) que que avons implémentés dans notre logiciel de gestion de stock.
    </p>


    <p class="text-justify mt-2">Power28 est un logiciel de gestion de stock multi-secteurs.
        Il permet de gérer et valoriser le stock d'une entreprise ainsi que réaliser
        un suivi des entrées et des sorties avec une granularité fine (avec de le détail de toutes les transactions).
    </p>


    <p>Power28 a été développé dans un premier temps pour le secteur medical, afin de réaliser un tracking
        du matériel ou consommables utilisés pour les patients mais aussi permettre une gestion correcte des dates de péremption et ainsi éviter les risques sanitaires.
        Les fonctionnalités de Power28 ont ensuite été étendues a tous types d'entreprises souhaitant connaître la valeur et le contenu de son stock et réaliser des
        entrées et sorties à l'aide de scan par QR-Code.
    </p>


</div>

<?php require 'Partials/footer.php';?>
</body>
</html>


