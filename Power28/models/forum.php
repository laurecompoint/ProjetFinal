<?php
function getForum( $forumId ){

	$db = dbConnect();

    $query = $db->prepare('
		SELECT forum.* , category.name AS category_name
		FROM forum
		JOIN category
		ON forum.category_id = category.id
		WHERE forum.id = ? AND forum.is_published = 1');

    $query->execute( array( $forumId ) );

    return $query->fetch();

}
function getForums()
{

    $db = dbConnect();

    $query = $db->prepare('SELECT * FROM forum WHERE category_id = ? AND is_published = 1 ORDER BY created_at DESC');

    $query->execute(array($_GET['category_id']));

    return $query->fetchAll();
}
function getCommentaire()
{
    $db = dbConnect();

    $query = $db->prepare('SELECT * FROM commentaire WHERE forum_id = ? AND is_published = 1 ORDER BY created_at DESC');

    $query->execute( array($_GET['forum_id']) );

    return $query->fetchAll();

}

function commentaire($author, $content, $forum_id, $is_published)
{
    $db = dbConnect();


    $commentaire = $db->prepare('INSERT INTO commentaire (author, content, forum_id, is_published, created_at) VALUES(?, ?, ?, ?, NOW())');
    $commentaire ->execute(array(
        $author,
        $content,
        $forum_id,
        $is_published,
    ));
    $commentaire ->closeCursor();
}
function subject($author, $name, $content, $category_id,  $is_published)
{
    $db = dbConnect();


    $subject = $db->prepare('INSERT INTO forum (author, name, content, category_id, is_published, created_at) VALUES(?, ?, ?, ?, ?, NOW())');
    $subject ->execute(array(
        $author,
         $name,
         $content,
         $category_id,
         $is_published,
    ));
    $subject ->closeCursor();
}


