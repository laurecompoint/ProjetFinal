<?php


function getArticles(){

	$db = dbConnect();





  		//récupération des articles publiés qui sont liés à la catégorie ET publiés
  		$query = $db->prepare('SELECT * FROM faq WHERE category_id = ? AND is_published = 1 ORDER BY created_at DESC');
  		$result = $query->execute( array($_GET['category_id']) );
  		//fetchAll() renvoie un ensemble d'enregistrements (tableau), le résultat sera à traiter avec un boucle foreach
  		$articles = $query->fetchAll();

}

?>
