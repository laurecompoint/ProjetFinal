
      <head>
          <link rel="stylesheet" href="assets/css/fonctionnalites.css">
          <title>Power 28 : Fonctionnaliées</title>
      </head>

      <body class="body">

      <?php require ('Partials/nav.php');?>

    <div class="fonction d-flex flex-column">

        <div class="borderbutton mt-4 container-fluid ml-3">
            <h2>Les Fonctionnalitées du logiciel</h2>
        </div>

        <div class="color row d-flex justify-content-around text-white">


            <div class="row col-md-6 d-flex justify-content-between">

                <div class="link d-flex flex-column text-center col-4 mt-5">
                    <img src="assets/img/fonctionnaliteone.png" alt="logofonction" class="picture" />
                   <a href="#accueil"><h6 class="mr-5 text-center text-white">Accueil</h6></a>
                </div>
                <div class="link d-flex flex-column text-center col-4 mt-5">
                    <img src="assets/img/user.png" alt="logofonction" class="picture" />
                    <a href="#utilisateurs"><h6 class="mr-5 text-white">Utilisateur</h6></a>
                </div>
                <div class="link d-flex flex-column text-center col-4 mt-5">
                    <img src="assets/img/fonctionnalitesix.png" alt="logofonction" class="picture" />
                    <a href="#transaction"><h6 class="mr-4 text-white">Transaction</h6></a>
                </div>
            </div>

            <div class="row col-md-6 d-flex justify-content-around">
                <div class="link d-flex flex-column text-center col-4 mt-5">
                    <img src="assets/img/fonctionnalitethree.png" alt="logofonction" class="picture" />
                    <a href="#parametres"><h6 class="mr-4 text-white">Paramètre</h6></a>
                </div>
                <div class="link d-flex flex-column text-center col-4 mt-5">
                    <img src="assets/img/fonctionnalitefoors.png" alt="logofonction" class="picture" />
                    <a href="#historique"><h6 class="mr-4 text-white">Historique</h6></a>
                </div>
                <div class="link d-flex flex-column text-center col-4 mt-5">
                    <img src="assets/img/fonctionnalitefive.png" alt="logofonction" class="picture" />
                    <a href="#categories"><h6 class="mr-4 text-white">Catégories</h6></a>
                </div>
            </div>
        </div>

        <div class="color row d-flex justify-content-around">


            <div class="row col-md-6 d-flex justify-content-around">
                <div class="link d-flex flex-column text-center col-4 mt-5">
                    <img src="assets/img/liste.png" alt="logofonction" class="picture" />
                    <a href="#stock"><h6 class="mr-5 text-white">Inventaire</h6></a>
                </div>
                <div class="link d-flex flex-column text-center col-4 mt-5">
                    <img src="assets/img/fonctionnaliteten.png" alt="logofonction" class="picture" />
                    <a href="#lieux"><h6 class="mr-4 text-white">Lieux</h6></a>
                </div>
                <div class="link d-flex flex-column text-center col-4 mt-5">
                    <img src="assets/img/fourniseur.png" alt="logofonction" class="picture" />
                    <a href="#fourniseurs"><h6 class="mr-4 text-white">Fourniseurs</h6></a>
                </div>
            </div>

            <div class="row col-md-6 d-flex justify-content-around">
                <div class="link d-flex flex-column text-center col-4 mt-5">
                    <img src="assets/img/fonctionnaliteeight.png" alt="logofonction" class="picture" />
                    <a href="#catalogue"><h6 class="mr-4 text-white mt-1">Catalogue</h6></a>
                </div>
                <div class="link d-flex flex-column text-center col-4 mt-5">
                    <img src="assets/img/fonctionnalitetwo.png" alt="logofonction" class="picture" />
                    <a href="#fabricants"><h6 class="mr-4 text-white">Fabricants</h6></a>
                </div>
                <div class="link d-flex flex-column text-center col-4 mt-5">
                    <img src="assets/img/fonctionnalitetwelve.png" alt="logofonction" class="picture" />
                    <a href="#commandes"><h6 class="mr-4 text-center text-white">Commandes</h6></a>
                </div>

            </div>
        </div>

    </div>
        <h2 id="accueil" class="title mt-4  container text-left">Page D'accueil</h2>
          <div class="row d-flex justify-content-center">

              <div class="d-flex flex-column col-md-6">

                  <img src="assets/img/imgfonction/accueil.png" alt="fonction1" class="fonctionOne">

              </div>

              <div class="text bg-white block col-md-6 text-center">
                  <p class="mt-4 ml-3">Accueil et menu simplifié pour une navigation plus rapide.</p>
                  <p class="ml-3">L’accuiel du logiciel va permettre au utililsateur d’acceder rappidement
                      a leur produits et a leur commandes.
                  </p>
                  <p class="ml-3"> La navigation comprend plusieur onglet : les catatlogue produits, les catégories,
                      les transactions de stock, les commandes, les fabricants, fournisseurs...
                  </p>

              </div>


          </div>



        <h3 id="catalogue" class="title container text-left mt-5">Catalogue</h3>

        <div class="row d-flex justify-content-center">

            <div class="d-flex flex-column col-md-6">

                <img src="assets/img/imgfonction/catalogue1.png" alt="fonction1" class="fonctionOne">


            </div>

            <div class="text bg-white block col-md-6 text-center d-flex align-items-center">
                <p>Power28 contient votre catalogue produit.<br>
                Chaque produit possède des caractéristiques propres et est lié à toutes les transactions de stock,
                    entrées et sorties utiles à la gestion de votre stock.
                </p>

            </div>
        </div>
    <h5 class="buttoncollapsed mt-4">
        <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <button type="button" class="btn btn-info ml-5">Plus de details</button>
        </a>
    </h5>

    <div id="accordion" role="tablist">
        <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">

        <div class="row d-flex justify-content-center mt-5">

            <div class="d-flex flex-column col-md-6">
                <img src="assets/img/imgfonction/catalogue3.png" alt="fonction1" class="fonctionOne">
            </div>

            <div class="text bg-white block col-md-6 text-center d-flex align-items-center">
                <p class="ml-5 text-justify">Chaque produit du catalogue peut contenir un nombre important de
                    caractéristiques physiques
                    ou financières utiles à la valorisation du stock.<br>
                    Les produits peuvent également être liés à une catégorie,
                    un fabricant ou un ou plusieurs fournisseurs
                </p>
            </div>
        </div>

        <div class="row d-flex justify-content-center mt-5">

            <div class="d-flex flex-column col-md-6">
                <img src="assets/img/imgfonction/catalogue4.png" alt="fonction1" class="fonctionOne">
            </div>

            <div class="bg-white block col-md-6 text-center d-flex align-items-center">
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
        </div>

        <div class="row d-flex justify-content-center mt-5">

            <div class="d-flex flex-column col-md-6">
                <img src="assets/img/imgfonction/catalogue5.png" alt="fonction1" class="fonctionOne">
            </div>

            <div class="bg-white block col-md-6 text-center d-flex align-items-center">
                <p>Il vous est possible de consulter l'historique détaillé de chaque opérations
                    réalisées sur les produits de votre catalogue.

                    Crédit, débit, changement d'informations, commandes, création, suppression...
                </p>
            </div>
        </div>

        <div class="row d-flex justify-content-center mt-5">

            <div class="d-flex flex-column col-md-6">
                <img src="assets/img/imgfonction/catalogue6.png" alt="fonction1" class="fonctionOne">
            </div>

            <div class="bg-white block col-md-6 text-center d-flex align-items-center">
                <p>Pensez à attacher des fichiers, des documents à vos produits en stock.
                    Notice, photos, garantie... Vous avez jusqu'à 5 emplacements disponibles, profitez-en !
                </p>

            </div>
        </div>

        <div class="row d-flex justify-content-center mt-5">

            <div class="d-flex flex-column col-md-6">
                <img src="assets/img/imgfonction/catalogue7.png" alt="fonction1" class="fonctionOne">
            </div>

            <div class="bg-white block col-md-6 text-center d-flex align-items-center">
                <p>Ajoutez facilement votre produit dans une des catégories créée préalablement.</p>

            </div>
        </div>
        <div class="row d-flex justify-content-center mt-5">

            <div class="d-flex flex-column col-md-6">
                <img src="assets/img/imgfonction/catalogue8.png" alt="fonction1" class="fonctionOne">
            </div>

            <div class="bg-white block col-md-6 text-center d-flex align-items-center">
                <p>Rattachez rapidement votre produit à un fabricant.</p>

            </div>
        </div>

    </div>
    </div>

          <h3 id="categories" class="mt-5 container title text-left">Catégories</h3>

            <div class="row d-flex justify-content-center">

                <div class="d-flex flex-column col-md-6">

                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img src="assets/img/imgfonction/categorie1.png" alt="fonction1" class="col-10 fonctionOne">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/imgfonction/categorie2.png" alt="fonction1" class="col-10 fonctionOne">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/imgfonction/categorie3.png" alt="fonction1" class="col-10 fonctionOne">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

                <div id="categoriemargine" class="text bg-white block col-md-6 text-center d-flex align-items-center">
                    <p>Créez autant de catégorie que nécessaire et ordonnez les en catégorie parente ou enfant.

                 Visualisez tous les produits présents dans une catégorie.
                    <br>Vous pourrez également apercevoir leur disponibilité en stock grâce au voyant de
                        couleur verte, orange ou rouge.
                        Prenez connaissance du montant de votre stock par catégorie !
                    </p>

                </div>
            </div>

    <h3 class="page mt-5 title container text-left">Débit de stock</h3>

    <div id="stock" class="row d-flex justify-content-center">

        <div class="d-flex flex-column col-md-6">
            <img src="assets/img/imgfonction/debit.png" alt="fonction1" class="fonctionOne">
        </div>

        <div id="transactiontext" class="text bg-white block col-md-6 text-center d-flex align-items-center">
            Débitez votre stock manuellement ou par scan de code-barre (type QR code) avec notre interface de gestion accélérée !
            Les options FIFO* ou FEFO* sont disponibles dans Power28, pour une rotation de stock améliorée !  Cette interface est optimisé pour les volumes de scan importants et pour travailler très rapidement. 

            FIFO : First In First Out, Premier Entré Premier Sortit.
            FEFO : First Expired First Out, Premier Expiré Premier Sortit.

        </div>
    </div>

    <h3 id="transaction" class="mt-3 title container">Inventaire de stock</h3>
    <div class="row d-flex justify-content-center">

        <div  class="d-flex flex-column col-md-6">
            <img src="assets/img/imgfonction/inventaire.png" alt="fonction1" class="fonctionOne stock">
        </div>

        <div id="transactiontext" class="text bg-white block col-md-6 text-center d-flex align-items-center">
            Réalisez un inventaire COMPLET de votre stock en un temps record grâce à notre interface
            optimisée ! Sur un seul écran vous aurez accès à toutes les commandes utiles et
            facilitant la réalisation d'un inventaire complexe et volumineux.

        </div>
    </div>
      <h3 id="transactions" class="page mt-5 title container text-left">Transactions</h3>

      <div id="stock" class="row d-flex justify-content-center">

          <div class="d-flex flex-column col-md-6">
              <img src="assets/img/imgfonction/transaction1.png" alt="fonction1" class="fonctionOne">
          </div>

          <div id="transactiontext" class="text bg-white block col-md-6 text-center d-flex align-items-center">
              Visualisez le détail d'une transaction de stock ainsi que toutes ses données financières.
              C'est ici que vous apercevrez la granularité fine d'une gestion de stock optimisée !

          </div>
      </div>

      <div class="row d-flex justify-content-center mt-5">

          <div  class="d-flex flex-column col-md-6">
              <img src="assets/img/imgfonction/transaction2.png" alt="fonction1" class="fonctionOne stock">
          </div>

          <div id="transactiontext" class="text bg-white block col-md-6 text-center d-flex align-items-center">
              Chaque produit dans votre stock peut être rattaché à un lieu préalablement créé.

          </div>
      </div>

      <h3 id="fabricants" class="page mt-5 title container text-left">Fabricants</h3>

      <div id="stock" class="row d-flex justify-content-center">

          <div class="d-flex flex-column col-md-6">
              <img src="assets/img/imgfonction/fabricants1.png" alt="fonction1" class="fonctionOne">
          </div>

          <div id="transactiontext" class="text bg-white block col-md-6 text-center d-flex align-items-center">
              Ajoutez tous les fabricants de vos produits en stock à votre base de donnée !

          </div>
      </div>

      <div class="row d-flex justify-content-center mt-5">

          <div  class="d-flex flex-column col-md-6">
              <img src="assets/img/imgfonction/fabricants2.png" alt="fonction1" class="fonctionOne stock">
          </div>

          <div id="transactiontext" class="text bg-white block col-md-6 text-center d-flex align-items-center">
              Consultez tous les produits rattachés à un fabricant ainsi que leur disponibilité en stock.
              Vous pourrez également
              connaître le montant du stock par fabricant.

          </div>
      </div>

      <h3 id="fourniseurs" class="page mt-5 title container text-left">Fourniseurs</h3>

      <div id="stock" class="row d-flex justify-content-center">

          <div class="d-flex flex-column col-md-6">
              <img src="assets/img/imgfonction/fournisseurs1.png" alt="fonction1" class="fonctionOne">
          </div>

          <div id="transactiontext" class="text bg-white block col-md-6 text-center d-flex align-items-center">
              Ajoutez tous les fournisseurs de vos produits en stock à votre base de donnée !
              Cela permet ensuite la création des références fournisseur.

          </div>
      </div>

      <div class="row d-flex justify-content-center mt-5">

          <div  class="d-flex flex-column col-md-6">
              <img src="assets/img/imgfonction/fournisseurs2.png" alt="fonction1" class="fonctionOne stock">
          </div>

          <div id="transactiontext" class="text bg-white block col-md-6 text-center d-flex align-items-center">
              Visualisez toutes vos références fournisseur liées à vos produits directement
              à partir de votre liste de fournisseurs.

          </div>
      </div>

    <h3 id="commandes" class="mt-5 title container">Commandes</h3>
    <div class="row d-flex justify-content-center">

        <div class="d-flex flex-column col-md-6 commandesimage">
            <img src="assets/img/imgfonction/commande1.png" alt="fonction1" class="fonctionOne">
        </div>

        <div class="text bg-white block col-md-6 text-center d-flex align-items-center">
            <p class="ml-3">Gérez vos commandes fournisseurs directement dans Power28.<br>
                Composez votre bon de commande, prévoyez vos dépenses,
                anticipez et évitez une rupture de stock. Très facilement en quelques clics !
            </p>

        </div>
    </div>
    <h5 class="buttoncollapsed mt-4">
        <a class="collapsed" data-toggle="collapse" href="#collapseFoor" aria-expanded="false" aria-controls="collapseTwo">
            <button type="button" class="btn btn-info ml-5">Plus de details</button>
        </a>
    </h5>
    <div id="accordion" role="tablist">
    <div id="collapseFoor" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
        <div class="row d-flex justify-content-center mt-5">

            <div class="d-flex flex-column col-md-6">
                <img src="assets/img/imgfonction/commande2.png" alt="fonction1" class="fonctionOne">
            </div>

            <div class="bg-white block col-md-6 text-center d-flex align-items-center">
                <p class="mt-5">Consultez le détail d'une commande que vous avez créé ou celles créées par vos
                    collaborateurs.
                </p>

            </div>
        </div>
        <div class="row d-flex justify-content-center mt-5">

            <div class="d-flex flex-column col-md-6">
                <img src="assets/img/imgfonction/commande3.png" alt="fonction1" class="fonctionOne">
            </div>

            <div class="bg-white block col-md-6 text-center d-flex align-items-center">
                <p>Avec l'aide de notre assistant, composez votre commande fournisseur très facilement et
                    visualisez directement le résultat. 
                </p>

            </div>
        </div>
        <div class="row d-flex justify-content-center mt-5">

            <div class="d-flex flex-column col-md-6">
                <img src="assets/img/imgfonction/commande4.png" alt="fonction1" class="fonctionOne">
            </div>

            <div class="bg-white block col-md-6 text-center d-flex align-items-center">
                <p>
                    Vous pouvez, à partir de cet écran, ajouter vos produits à votre bon de commande en utilisant
                    les références fournisseurs, elles seront utiles pour la maîtrise du
                    coût de vos commandes ainsi que la valorisation de votre stock.
                </p>

                <p>Consultez le détail de chaque produit ajouté à votre bon de commande.
                </p>

            </div>
        </div>
        <div class="row d-flex justify-content-center mt-5">

            <div class="d-flex flex-column col-md-6">
                <img src="assets/img/imgfonction/commande5.png" alt="fonction1" class="fonctionOne">
            </div>

            <div class="bg-white block col-md-6 text-center d-flex align-items-center">
                <p>Exportez votre bon de commande afin de le faire parvenir à votre fournisseur favori.
                    Soit par récapitulatif total, contenant tous les produits de tous les fournisseurs.
                    Soit par fournisseur, un fichier sera créé pour chaque fournisseur afin de n'envoyer que l'utile à chaque correspondant.
                </p>

            </div>
        </div>
        <div class="row d-flex justify-content-center mt-5">

            <div class="d-flex flex-column col-md-6">
                <img src="assets/img/imgfonction/commande6.png" alt="fonction1" class="fonctionOne">
            </div>

            <div class="bg-white block col-md-6 text-center d-flex align-items-center">
                <p>Une fois vos colis ou produits reçus, utilisez notre assistant afin de pointer la réception de vos produits en stock. 
                    Cet assistant pas à pas facilite le pointage en prenant en compte les variabilités de livraison, retards,
                    livraison partielle, produits offerts,
                    gestion des n° de lot et dates de péremption...
                </p>
            </div>
        </div>

        <div class="row d-flex justify-content-center mt-5">

            <div class="d-flex flex-column col-md-6">
                <img src="assets/img/imgfonction/commande7.png" alt="fonction1" class="fonctionOne">
            </div>

            <div class="bg-white block col-md-6 text-center d-flex align-items-center">
                <p>Assistant de réception des commandes, en mode pas à pas, visuel n°1.
                </p>
            </div>
        </div>
        <div class="row d-flex justify-content-center mt-5">

            <div class="d-flex flex-column col-md-6">
                <img src="assets/img/imgfonction/commande8.png" alt="fonction1" class="fonctionOne">
            </div>

            <div class="bg-white block col-md-6 text-center d-flex align-items-center">
                <p>Assistant de réception des commandes, en mode pas à pas, visuel n°2.
                </p>
            </div>
        </div>
        <div class="row d-flex justify-content-center mt-5">

            <div class="d-flex flex-column col-md-6">
                <img src="assets/img/imgfonction/commande9.png" alt="fonction1" class="fonctionOne">
            </div>

            <div class="bg-white block col-md-6 text-center d-flex align-items-center">
                <p>Si un produit reçu ne correspond pas à vos attentes, n'hésitez pas à utiliser l'assistant de
                    retour prévu dans le système de gestion des commandes.
                </p>

            </div>
        </div>
        <div class="row d-flex justify-content-center mt-5">

            <div class="d-flex flex-column col-md-6">
                <img src="assets/img/imgfonction/commande10.png" alt="fonction1" class="fonctionOne">
            </div>

            <div class="bg-white block col-md-6 text-center d-flex align-items-center">
                <p>Une fois vos produits reçus, imprimez toutes les étiquettes produit contenant l
                    es codes-barres (QR code) utiles à la gestion de stock. 
                </p>
                <p>
                    Nous avons sélectionné une taille universelle pour faciliter l'impression de vos étiquettes produit.
                </p>


            </div>
        </div>
        <div class="row d-flex justify-content-center mt-5">

            <div class="d-flex flex-column col-md-6">
                <img src="assets/img/imgfonction/commande11.png" alt="fonction1" class="fonctionOne">
            </div>

            <div class="bg-white block col-md-6 text-center d-flex align-items-center">
                <p>Afin de suivre au plus près l'évolution de vos bons de commande, nous
                    avons implémenté un système d'historique puissant dans Power28.
                </p>
                <p>
                    Vous pourrez consulter toutes les entrées de l'historique directement à partir de vos commandes.
                </p>

            </div>
        </div>
    </div>
    </div>

      <h3 id="lieux" class="page mt-5 title container text-left">Lieux</h3>

      <div id="stock" class="row d-flex justify-content-center">

          <div class="d-flex flex-column col-md-6">
              <img src="assets/img/imgfonction/lieux1.png" alt="fonction1" class="fonctionOne">
          </div>

          <div id="transactiontext" class="text bg-white block col-md-6 text-center d-flex align-items-center">
              Gérez vos lieux directement dans Power28 pour optimiser les emplacements de vos entrepôts.

          </div>
      </div>

      <div class="row d-flex justify-content-center mt-5">

          <div  class="d-flex flex-column col-md-6">
              <img src="assets/img/imgfonction/lieux2.png" alt="fonction1" class="fonctionOne stock">
          </div>

          <div id="transactiontext" class="text bg-white block col-md-6 text-center d-flex align-items-center">
              Dans votre gestion d'utilisateurs, il vous est possible de consulter
              l'historique de l'activité réalisé sur Power28 par collaborateur.
              Un filtrage par type d'activité est également possible.

          </div>
      </div>

  <h3 id="historique" class="mt-5 title container text-left">Historique</h3>
    <div class="row d-flex justify-content-center imagehistorique">

        <div class="d-flex flex-column col-md-6">
            <img src="assets/img/imgfonction/historique.png" alt="fonction1" class="fonctionOne">
        </div>

        <div class="text bg-white block col-md-6 text-center d-flex align-items-center justify-content-center">
            Consultez toute l'activité liée à votre stock, réalisée par vous et vos collaborateurs directement dans le puissant système d'historique développé dans Power28.

        </div>
    </div>

      <h3 id="utilisateurs" class="page mt-5 title container text-left">Utilisateurs</h3>

      <div id="stock" class="row d-flex justify-content-center">

          <div class="d-flex flex-column col-md-6">
              <img src="assets/img/imgfonction/utilisateurs1.png" alt="fonction1" class="fonctionOne">
          </div>

          <div id="transactiontext" class="text bg-white block col-md-6 text-center d-flex align-items-center">
              Gérez tous les collaborateurs pouvant utiliser les fonctionnalités de Power28.

          </div>
      </div>

      <div class="row d-flex justify-content-center mt-5">

          <div  class="d-flex flex-column col-md-6">
              <img src="assets/img/imgfonction/utilisateurs2.png" alt="fonction1" class="fonctionOne stock">
          </div>

          <div id="transactiontext" class="text bg-white block col-md-6 text-center d-flex align-items-center">
              Dans votre gestion d'utilisateurs, il vous est possible de consulter
              l'historique de l'activité réalisé sur Power28 par collaborateur.
              Un filtrage par type d'activité est également possible.

          </div>
      </div>

    <h3 id="parametres" class="mt-5 title container text-left">Paramètres</h3>
    <div class="row d-flex justify-content-center parametretext">

        <div class="d-flex flex-column col-md-6">
            <img src="assets/img/imgfonction/parametres.png" alt="fonction1" class="fonctionOne">
        </div>

        <div class="text bg-white block col-md-6 text-center d-flex align-items-center">
            <p>En amont de l'utilisation du logiciel de gestion de stock Power28, nous avons prévu un
                écran de paramétrage simple et intuitif pour mémoriser
                les réglages essentiels à la bonne utilisation de votre outil.
            </p>
        </div>
    </div>


      <?php require 'Partials/footer.php';?>

</body>

