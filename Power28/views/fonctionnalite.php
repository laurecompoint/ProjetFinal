<!DOCTYPE html>
<html>
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimum-scale=1.0">
      <meta hhtp-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
      <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="views/assets/css/fonctionnalite.css">
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
      <title>Power 28</title>

  </head>
  <body>


    <nav>

      <?php require('partials/nav.php'); ?>

    </nav>

  <div class="fonction d-flex flex-column justify-content-center align-items-center">

      <div class="borderbutton text-center mt-4">
          <a href="#"> <h2>Les Fonctionnalitées du logiciel</h2></a>
      </div>

      <div class="row d-flex justify-content-around">
             <a class="nav-link col-2" href="#accueil"> <img src="views/assets/img/fonctionnaliteOne.png" alt="logofonction" class="picture col-12"  /></a>

              <a class="nav-link col-2" href="#catalogue"> <img src="views/assets/img/fonctionnaliteEight.png" alt="logofonction" class="picture col-12" /></a>

             <a class="nav-link col-2" href="#categories"> <img src="views/assets/img/fonctionnaliteFive.png" alt="logofonction" class="picture col-12" /></a>

             <a class="nav-link col-2" href="#stock"> <img src="views/assets/img/fonctionnaliteSeven.png" alt="logofonction" class="picture col-12" /></a>

            <a class="nav-link col-2" href="#transaction"> <img src="views/assets/img/fonctionnaliteSix.png" alt="logofonction" class="picture col-12" /></a>

            <a class="nav-link col-2" href="#fourniseurs"> <img src="views/assets/img/fonctionnaliteNine.png" alt="logofonction" class="picture col-12" /></a>
      </div>
      <div class="row">
              <a class="nav-link col-2" href="#fabricants"> <img src="views/assets/img/fonctionnaliteEleven.png" alt="logofonction" class="picture col-12" /></a>

              <a class="nav-link col-2" href="#comandes"> <img src="views/assets/img/fonctionnaliteTwelve.png" alt="logofonction"  class="picture col-12"/></a>

              <a class="nav-link col-2" href="#lieux"> <img src="views/assets/img/fonctionnaliteTen.png" alt="logofonction" class="picture col-12" /></a>

              <a class="nav-link col-2" href="#historique"> <img src="views/assets/img/fonctionnaliteFoor.png" alt="logofonction" class="picture col-12" /></a>

              <a class="nav-link col-2" href="#utilisateurs"> <img src="views/assets/img/fonctionnaliteTwo.png" alt="logofonction"  class="picture col-12"/></a>

              <a class="nav-link col-2" href="#parametres"> <img src="views/assets/img/fonctionnaliteThree.png" alt="logofonction" class="picture col-12" /></a>
      </div>

  </div>

          <h2 id="accueil" class="mt-3 ml-3 text-left">Page D'accueil</h2>

          <div class="row">

              <div class="d-flex flex-column col-md-6 text-justify">


                  <p class="mt-4 ml-3">Accueil et menu simplifié pour une navigation plus rapide.</p>
                  <p class="ml-3">L’accuiel du logiciel va permettre au utililsateur d’acceder rappidement
                      a leur produits et a leur commandes.
                  </p>
                  <p class="ml-3"> La navigation comprend plusieur onglet : les catatlogue produits, les catégories,
                      les transactions de stock, les commandes, les fabricants, fournisseurs...
                  </p>

              </div>

              <img src="views/assets/img/imgfonction/accueil.png" alt="fonction1" class="col-md-6 fonctionOne">
          </div>
      </div>



          <h3 id="catalogue" class="ml-3 text-left">Catalogue</h3>

          <div class="row m-auto">

              <a class="col-md-4" data-fancybox="gallery" href="views/assets/img/imgfonction/catalogue1.png">
                  <img src="views/assets/img/imgfonction/catalogue1.png" alt="fonction1" class="col-12 rounded mx-auto d-block mt-5">
              </a>

              <div class="d-flex flex-column col-md-4 text-justify mt-5">


                  <p>Power28 contient votre catalogue produit.</p>
                  <p>Chaque produit possède des caractéristiques propres et est lié à toutes les transactions de stock,
                          entrées et sorties utiles à la gestion de votre stock.
                  </p>

                  <p>Chaque produit du catalogue peut contenir un nombre important de
                      caractéristiques physiques
                      ou financières utiles à la valorisation du stock.
                  </p>
                  <p>
                      Les produits peuvent également être liés à une catégorie,
                      un fabricant ou un ou plusieurs fournisseurs
                  </p>

              </div>

              <a class="col-md-4" data-fancybox="gallery" href="views/assets/img/imgfonction/catalogue2.png">
                  <img src="views/assets/img/imgfonction/catalogue2.png" alt="fonction1" class="col-12 rounded mx-auto d-block mt-5">
              </a>


          </div>

          <h5 class="mb-0">
         <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <button type="button" class="btn btn-info ml-3">Plus de details</button>
         </a>
       </h5>



<div id="accordion" role="tablist">
   <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">


          <div class="row m-auto mt-5">

              <a class="col-md-4" data-fancybox="gallery" href="views/assets/img/imgfonction/catalogue3.png">
                  <img src="views/assets/img/imgfonction/catalogue3.png" alt="fonction1" class="col-12 rounded mx-auto d-block mt-5">
              </a>

              <div class="d-flex flex-column col-md-4 text-justify mt-5">


                  <p>Chaque produit du catalogue peut contenir un nombre important de
                      caractéristiques physiques
                      ou financières utiles à la valorisation du stock.
                  </p>
                  <p>
                      Les produits peuvent également être liés à une catégorie,
                      un fabricant ou un ou plusieurs fournisseurs
                  </p>

                  <p>Chaque produit du catalogue est lié à un ou plusieurs fournisseurs
                      grâce aux références fournisseurs.
                      Elles sont utiles à la mémorisation des informations financières de chaque produit. 
                  </p>
                  <p>
                      Ces références fournisseurs sont également utilisées dans les commandes pour
                      accélérer votre processus de
                      commande et connaître le montant de votre commande avant envoi au fournisseur.
                  </p>

              </div>

              <a class="col-md-4" data-fancybox="gallery" href="views/assets/img/imgfonction/catalogue4.png">
                  <img src="views/assets/img/imgfonction/catalogue4.png" alt="fonction1" class="col-12 rounded mx-auto d-block mt-5">

              </a>
          </div>
          <div class="row m-auto">

              <a class="col-md-4" data-fancybox="gallery" href="views/assets/img/imgfonction/catalogue5.png">
                  <img src="views/assets/img/imgfonction/catalogue5.png" alt="fonction1" class="col-12 rounded mx-auto d-block mt-5">
              </a>

              <div class="d-flex flex-column col-md-4 text-justify mt-5">


                  <p>Il vous est possible de consulter l'historique détaillé de chaque opérations
                      réalisées sur les produits de votre catalogue.

                      Crédit, débit, changement d'informations, commandes, création, suppression...
                  </p>

                  <p>Pensez à attacher des fichiers, des documents à vos produits en stock.
                      Notice, photos, garantie... Vous avez jusqu'à 5 emplacements disponibles, profitez-en !
                  </p>



              </div>

              <a class="col-md-4" data-fancybox="gallery" href="views/assets/img/imgfonction/catalogue6.png">
                  <img src="views/assets/img/imgfonction/catalogue6.png" alt="fonction1" class="col-12 rounded mx-auto d-block mt-5">
              </a>
          </div>
      <div class="row m-auto">

          <a class="col-md-4" data-fancybox="gallery" href="views/assets/img/imgfonction/catalogue7.png">
              <img src="views/assets/img/imgfonction/catalogue7.png" alt="fonction1" class="col-12 rounded mx-auto d-block mt-5">

          </a>

          <div class="d-flex flex-column col-md-4 text-justify mt-5">


              <p>Ajoutez facilement votre produit dans une des catégories créée préalablement.</p>
              <p>Rattachez rapidement votre produit à un fabricant.</p>

          </div>

          <a class="col-md-4" data-fancybox="gallery" href="views/assets/img/imgfonction/catalogue8.png">
              <img src="views/assets/img/imgfonction/catalogue8.png" alt="fonction1" class="col-12 rounded mx-auto d-block mt-5">
          </a>
      </div>

  </div>

          <h3 id="categories" class="mt-5  ml-3 text-left">Catégories</h3>

          <div class="row m-auto">

              <a class="col-md-4" data-fancybox="gallery" href="views/assets/img/imgfonction/categorie1.png">
                  <img src="views/assets/img/imgfonction/categorie1.png" alt="fonction1" class="col-12 rounded mx-auto d-block mt-5">
              </a>

              <div class="d-flex flex-column col-md-4 text-justify mt-5">


                  <p class="mt-3 ml-3">Créez autant de catégorie que nécessaire et ordonnez les en catégorie parente ou enfant.
                  </p>
                  <p class="ml-3 mt-3">Visualisez tous les produits présents dans une catégorie.</p>
              </div>

              <a class="col-md-4" data-fancybox="gallery" href="views/assets/img/imgfonction/categorie2.png mt-5">
                  <img src="views/assets/img/imgfonction/categorie2.png" alt="fonction1" class="col-12 rounded mx-auto d-block mt-5">
              </a>
          </div>

          <div class="row m-auto">

              <div class="d-flex flex-column col-md-7 text-justify mt-5 mt-5">

                  <p class="ml-3 mt-3">Vous pourrez également apercevoir leur disponibilité en stock grâce au voyant de
                      couleur verte, orange ou rouge.</p>
                     <p class="ml-3 mt-3">Prenez connaissance du montant de votre stock par catégorie !</p>


              </div>

              <a class="col-md-5" data-fancybox="gallery" href="views/assets/img/imgfonction/categorie3.png">
                  <img src="views/assets/img/imgfonction/categorie3.png" alt="fonction1" class="col-12 rounded mx-auto d-block mt-5">
              </a>


          </div>

      </div>
  </div>



      <h3 id="stock" class="page mt-4 ml-3 text-left">Débit et inventaire de stock</h3>

      <div class="row m-auto">

          <a class="col-md-4" data-fancybox="gallery" href="views/assets/img/imgfonction/debit.png">
              <img src="views/assets/img/imgfonction/debit.png" alt="fonction1" class="col-12 rounded mx-auto d-block mt-5">
          </a>

          <div class="d-flex flex-column col-md-4 text-justify mt-5">

              Ajoutez tous les fabricants de vos produits en stock à votre base de donnée !
              Consultez tous les produits rattachés à un fabricant ainsi que leur disponibilité en stock.
              Vous pourrez également connaître le montant du stock par fabricant.


          </div>

          <a class="col-md-4" data-fancybox="gallery" href="views/assets/img/imgfonction/inventaire.png">
              <img src="views/assets/img/imgfonction/inventaire.png" alt="fonction1" class="col-12 rounded mx-auto d-block mt-5">
          </a>

      </div>


  <h3 id="transaction" class="mt-4 ml-3 text-left">Transaction de stock</h3>

  <div class="row m-auto">

      <a class="col-md-4" data-fancybox="gallery" href="views/assets/img/imgfonction/transaction1.png">
          <img src="views/assets/img/imgfonction/transaction1.png" alt="fonction1" class="col-12 rounded mx-auto d-block mt-5">
      </a>

      <div class="d-flex flex-column col-md-4 text-justify mt-5">

          Ajoutez tous les fabricants de vos produits en stock à votre base de donnée !
          Consultez tous les produits rattachés à un fabricant ainsi que leur disponibilité en stock.
          Vous pourrez également connaître le montant du stock par fabricant.


      </div>

      <a class="col-md-4" data-fancybox="gallery" href="views/assets/img/imgfonction/transaction2.png">
          <img src="views/assets/img/imgfonction/transaction2.png" alt="fonction1" class="col-12 rounded mx-auto d-block mt-5">
      </a>

  </div>


  <h3 id="fabricants" class="page mt-4 ml-3 text-left">Fabricants</h3>


  <div class="row m-auto">

      <a class="col-md-4" data-fancybox="gallery" href="views/assets/img/imgfonction/fabricants1.png">
          <img src="views/assets/img/imgfonction/fabricants1.png" alt="fonction1" class="col-12 rounded mx-auto d-block mt-5">
      </a>
      <div class="d-flex flex-column col-md-4 text-justify mt-5">

          Ajoutez tous les fabricants de vos produits en stock à votre base de donnée !

          Consultez tous les produits rattachés à un fabricant ainsi que leur disponibilité en stock.
          Vous pourrez également connaître le montant du stock par fabricant.



      </div>

      <a class="col-md-4" data-fancybox="gallery" href="views/assets/img/imgfonction/fabricants2.png">
          <img src="views/assets/img/imgfonction/fabricants2.png" alt="fonction1" class="col-12 rounded mx-auto d-block mt-5">
      </a>

  </div>


  <h3 id="fourniseurs" class="page mt-4 ml-3 text-left">Fourniseurs</h3>

  <div class="row m-auto">

      <a class="col-md-4" data-fancybox="gallery" href="views/assets/img/imgfonction/fournisseurs1.png">
          <img src="views/assets/img/imgfonction/fournisseurs1.png" alt="fonction1" class="col-12 rounded mx-auto d-block mt-5">
      </a>
      <div class="d-flex flex-column col-md-4 text-justify mt-5">

          Ajoutez tous les fournisseurs de vos produits en stock à votre base de donnée !
          Cela permet ensuite la création des références fournisseur.

          Visualisez toutes vos références fournisseur liées à vos produits directement à partir de votre liste de fournisseurs.



      </div>

      <a class="col-md-4" data-fancybox="gallery" href="views/assets/img/imgfonction/fournisseurs2.png">
          <img src="views/assets/img/imgfonction/fournisseurs2.png" alt="fonction1" class="col-12 rounded mx-auto d-block mt-5">
      </a>

  </div>

  <h3 id="comandes" class="mt-4  ml-3 text-left">Comandes</h3>

  <div class="row m-auto">

      <a class="col-md-4 mt-5" data-fancybox="gallery" href="views/assets/img/imgfonction/commande1.png">
          <img src="views/assets/img/imgfonction/commande1.png" alt="fonction1" class="col-12 rounded mx-auto d-block">
      </a>
      <div class="d-flex flex-column col-md-4 text-justify mt-5">

          <p class="mt-3 ml-3">Gérez vos commandes fournisseurs directement dans Power28.
          </p>
          <p class="ml-3">
              Composez votre bon de commande, prévoyez vos dépenses,
              anticipez et évitez une rupture de stock. Très facilement en quelques clics !
          </p>

          <p class="mt-2">Consultez le détail d'une commande que vous avez créé ou celles créées par vos collaborateurs.
          </p>



      </div>

      <a class="col-md-4 mt-5" data-fancybox="gallery" href="views/assets/img/imgfonction/commande2.png">
          <img src="views/assets/img/imgfonction/commande2.png" alt="fonction1" class="col-12 rounded mx-auto d-block">
      </a>

  </div>

  <h5 class="mb-0">
      <a class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          <button type="button" class="button btn text-white mt-3 ml-3">Plus de détail</button>
      </a>
  </h5>


  <div class="row m-auto">

      <a class="col-md-4 mt-5" data-fancybox="gallery" href="views/assets/img/imgfonction/commande3.png">
          <img src="views/assets/img/imgfonction/commande3.png" alt="fonction1" class="col-12 rounded mx-auto d-block">
      </a>
      <div class="d-flex flex-column col-md-4 text-justify mt-5">

          <p>Avec l'aide de notre assistant, composez votre commande fournisseur très facilement et
          visualisez directement le résultat. 
          </p>
          <p>
              Vous pouvez, à partir de cet écran, ajouter vos produits à votre bon de commande en utilisant
              les références fournisseurs, elles seront utiles pour la maîtrise du
              coût de vos commandes ainsi que la valorisation de votre stock.
          </p>

          <p>Consultez le détail de chaque produit ajouté à votre bon de commande.
          </p>


      </div>

      <a class="col-md-4 mt-5" data-fancybox="gallery" href="views/assets/img/imgfonction/commande4.png">
          <img src="views/assets/img/imgfonction/commande4.png" alt="fonction1" class="col-12 rounded mx-auto d-block">
      </a>

  </div>

  <div class="row m-auto">

      <a class="col-md-4 mt-5" data-fancybox="gallery" href="views/assets/img/imgfonction/commande5.png">
          <img src="views/assets/img/imgfonction/commande5.png" alt="fonction1" class="col-12 rounded mx-auto d-block">
      </a>
      <div class="d-flex flex-column col-md-4 text-justify mt-5">

          <p>Exportez votre bon de commande afin de le faire parvenir à votre fournisseur favori.
              Soit par récapitulatif total, contenant tous les produits de tous les fournisseurs.
              Soit par fournisseur, un fichier sera créé pour chaque fournisseur afin de n'envoyer que l'utile à chaque correspondant.
          </p>

          <p>Une fois vos colis ou produits reçus, utilisez notre assistant afin de pointer la réception de vos produits en stock. 
              Cet assistant pas à pas facilite le pointage en prenant en compte les variabilités de livraison, retards,
              livraison partielle, produits offerts,
              gestion des n° de lot et dates de péremption...
          </p>


      </div>

      <a class="col-md-4 mt-5" data-fancybox="gallery" href="views/assets/img/imgfonction/commande6.png">
          <img src="views/assets/img/imgfonction/commande6.png" alt="fonction1" class="col-12 rounded mx-auto d-block">
      </a>

  </div>

  <div class="row m-auto">

      <a class="col-md-4 mt-5" data-fancybox="gallery" href="views/assets/img/imgfonction/commande7.png">
          <img src="views/assets/img/imgfonction/commande7.png" alt="fonction1" class="col-12 rounded mx-auto d-block">
      </a>
      <div class="d-flex flex-column col-md-4 text-justify mt-5">

          <p>Assistant de réception des commandes, en mode pas à pas, visuel n°1.
          </p>
          <p>Assistant de réception des commandes, en mode pas à pas, visuel n°2.
          </p>


      </div>

      <a class="col-md-4 mt-5" data-fancybox="gallery" href="views/assets/img/imgfonction/commande8.png">
          <img src="views/assets/img/imgfonction/commande8.png" alt="fonction1" class="col-12 rounded mx-auto d-block">
      </a>

  </div>

  <div class="row m-auto">

      <a class="col-md-4 mt-5" data-fancybox="gallery" href="views/assets/img/imgfonction/commande9.png">
          <img src="views/assets/img/imgfonction/commande9.png" alt="fonction1" class="col-12 rounded mx-auto d-block">
      </a>

      <div class="d-flex flex-column col-md-4 text-justify mt-5">

          <p>Si un produit reçu ne correspond pas à vos attentes, n'hésitez pas à utiliser l'assistant de
              retour prévu dans le système de gestion des commandes.
          </p>

          <p>Une fois vos produits reçus, imprimez toutes les étiquettes produit contenant l
              es codes-barres (QR code) utiles à la gestion de stock. 
          </p>
          <p>
              Nous avons sélectionné une taille universelle pour faciliter l'impression de vos étiquettes produit.
          </p>


      </div>

      <a class="col-md-4 mt-5" data-fancybox="gallery" href="views/assets/img/imgfonction/commande10.png">
          <img src="views/assets/img/imgfonction/commande10.png" alt="fonction1" class="col-12 rounded mx-auto d-block">
      </a>

  </div>

  <div class="row m-auto">

      <div class="d-flex flex-column col-md-6 text-justify mt-5">

          <p>Afin de suivre au plus près l'évolution de vos bons de commande, nous
              avons implémenté un système d'historique puissant dans Power28.
          </p>
          <p>
              Vous pourrez consulter toutes les entrées de l'historique directement à partir de vos commandes.
          </p>


      </div>

      <a class="col-md-6 mt-5" data-fancybox="gallery" href="views/assets/img/imgfonction/commande10.png">
          <img src="views/assets/img/imgfonction/commande10.png" alt="fonction1" class="col-12 rounded mx-auto d-block">
      </a>

  </div>


  <h3 id="lieux" class="mt-4 ml-3 text-left">Lieux</h3>
`
  <div class="row m-auto">

      <a class="col-md-4" data-fancybox="gallery" href="views/assets/img/imgfonction/lieu1.png">
          <img src="views/assets/img/imgfonction/lieu1.png" alt="fonction1" class="col-12 rounded mx-auto d-block mt-5">
      </a>

      <div class="d-flex flex-column col-md-4 text-justify mt-5">

          <p>Gérez vos lieux directement dans Power28 pour optimiser les emplacements de vos entrepôts.
          </p>
          <p>
              Prenez connaissance de la valeur de votre stock par lieu et réalisez un
              tracking grâce aux étiquettes de lieu.
          </p>

          <p>Consultez le détail d'une commande que vous avez créé ou celles créées par vos collaborateurs
          </p>


      </div>

      <a class="col-md-4" data-fancybox="gallery" href="views/assets/img/imgfonction/lieu2.png">
          <img src="views/assets/img/imgfonction/lieu2.png" alt="fonction1" class="col-12 rounded mx-auto d-block mt-5">
      </a>

  </div>

  <h3 id="historique" class="mt-5 ml-3 text-left">Historique</h3>

  <div class="row m-auto">

      <div class="d-flex flex-column col-md-7 text-justify mt-5">
          <p>Gérez tous les collaborateurs pouvant utiliser les fonctionnalités de Power28.

          </p>
      </div>

      <a class="col-md-5" data-fancybox="gallery" href="views/assets/img/imgfonction/historique.png">
          <img src="views/assets/img/imgfonction/historique.png" alt="fonction1" class="col-12 rounded mx-auto d-block mt-5">
      </a>

  </div>

  <h3 id="utilisateurs" class="mt-5  ml-3 text-left">Utilisateurs</h3>

  <div class="row m-auto">

      <a class="col-md-4" data-fancybox="gallery" href="views/assets/img/imgfonction/utilisateurs1.png">
          <img src="views/assets/img/imgfonction/utilisateurs1.png" alt="fonction1" class="col-12 rounded mx-auto d-block mt-5">
      </a>

      <div class="d-flex flex-column col-md-4 text-justify mt-5">

          <p>Gérez tous les collaborateurs pouvant utiliser les fonctionnalités de Power28.
          </p>

          <p>Dans votre gestion d'utilisateurs, il vous est possible de consulter
              l'historique de l'activité réalisé sur Power28 par collaborateur.
              Un filtrage par type d'activité est également possible.
          </p>


      </div>

      <a class="col-md-4" data-fancybox="gallery" href="views/assets/img/imgfonction/utilisateurs2.png">
          <img src="views/assets/img/imgfonction/utilisateurs2.png" alt="fonction1" class="col-12 rounded mx-auto d-block mt-5">
      </a>

  </div>


  <h3 id="parametres" class="mt-5 ml-3 text-left">Parametres</h3>

  <div class="row m-auto">

      <div class="d-flex flex-column col-md-7 text-justify mt-5">
          <p>En amont de l'utilisation du logiciel de gestion de stock Power28, nous avons prévu un
              écran de paramétrage simple et intuitif pour mémoriser
              les réglages essentiels à la bonne utilisation de votre outil.
          </p>
      </div>

      <a class="col-md-5" data-fancybox="gallery" href="views/assets/img/imgfonction/parametres.png">
          <img src="views/assets/img/imgfonction/parametres.png" alt="fonction1" class="col-12 rounded mx-auto d-block mt-5">
      </a>

  </div>



  <footer>

    <?php require('partials/footer.php'); ?>

  </footer>

 </body>


  </html>
