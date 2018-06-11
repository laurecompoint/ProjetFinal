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

    if(isset($_POST['save'])){

    }

}

function postcomments()
{
    $db = dbConnect();

    $comments = $db->prepare('INSERT INTO commentaire (content, forum_id, is_published, created_at) VALUES(?, ?, ?, NOW())');
    $affectedLines = $comments->execute([
            $_POST['content'],
            $_POST['forum_id'],
            $_POST['is_published']
        ]
    );
    return $affectedLines;

}

function postsubject()
{
    $db = dbConnect();

    $subjects = $db->prepare('INSERT INTO forum (name, content, category_id, is_published, created_at) VALUES(?, ?, ?, ?, NOW())');
    $affectedLines = $subjects->execute([
            $_POST['name'],
            $_POST['content'],
            $_POST['category_id'],
            $_POST['is_published']
        ]
    );
    return $affectedLines;

}
if(isset($_POST['savesubject'])){
    postsubject();
}

?>

