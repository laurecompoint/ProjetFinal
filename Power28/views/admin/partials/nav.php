
<?php
	//nombre d'enregistrements de la table user
	$nbUsers = $db->query("SELECT COUNT(*) FROM user")->fetchColumn();
	//nombre d'enregistrements de la table category
	$nbCategories = $db->query("SELECT COUNT(*) FROM category")->fetchColumn();
	//nombre d'enregistrements de la table article
	$nbFaq = $db->query("SELECT COUNT(*) FROM faq")->fetchColumn();

    $nbForum = $db->query("SELECT COUNT(*) FROM forum")->fetchColumn();
    $nbCommentaire = $db->query("SELECT COUNT(*) FROM commentaire")->fetchColumn();
?>



    <div class="row d-flex justify-content-around bg-white">

		<a href="index.php?admin=user_list">Gestion des utilisateurs (<?php echo $nbUsers; ?>)</a>
		<a href="index.php?admin=category_list">Gestion des catégories (<?php echo $nbCategories; ?>)</a>
		<a href="index.php?admin=faq_list">Gestion des FAQ (<?php echo $nbFaq; ?>)</a>
        <a href="index.php?admin=forum_list">Gestion des Forums (<?php echo $nbForum; ?>)</a>
        <a href="index.php?admin=commentaire_list">Gestion des commentaires  (<?php echo $nbCommentaire; ?>)</a>

    </div>





