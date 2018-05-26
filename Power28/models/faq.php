<?php




function getArticles($categoryId = false){

	$db = dbConnect();

	$queryString = 'SELECT faq.*, GROUP_CONCAT(category.name SEPARATOR " / ") AS categories FROM faq JOIN category';

  if($categoryId){
    $queryString .= ' AND faq_category.category_id = :category_id';
	}

	$queryString .= ' GROUP BY faq.id';


	if($categoryId){
		$query->bindValue(':category_id', (int)$categoryId, PDO::PARAM_INT);
	}

	$query -> execute();

	return $query->fetchAll();
}



?>
