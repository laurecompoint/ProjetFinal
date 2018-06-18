<?php

function admincommentaire()
{
    $db = dbConnect();
    $query = $db->query('SELECT * FROM commentaire');
    return $query->fetchAll();
}

function commentairedelate($commentaireid)
{
    $db = dbConnect();
    $query = $db->prepare('DELETE FROM commentaire WHERE id = ?');
    $query->execute ([ $commentaireid]);

}
function insertcommentaire($content, $forum_id, $is_published)
{
    $db = dbConnect();


    $subject = $db->prepare('INSERT INTO commentaire (content, forum_id, is_published, created_at) VALUES(?, ?, ?, NOW())');
    $subject ->execute(array(
        $content,
        $forum_id,
        $is_published,
    ));
    $subject ->closeCursor();
}
function modifcommentaire($content, $is_published, $forum_id, $id){
    $db = dbConnect();

    $query = $db->prepare('UPDATE commentaire SET
		content = :content,
		forum_id = :forum_id,
		is_published = :is_published
		WHERE id = :id'
    );

    $query->execute(
        [
            'content' =>  $content,
            'is_published' => $is_published,
            'forum_id' => $forum_id,
            'id' => $id
        ]
    );
}
function commentaireId()
{
    $db = dbConnect();
    $query = $db->prepare('SELECT * FROM commentaire WHERE id = ?');
    $query->execute(array($_GET['commentaire_id']));
    return $query->fetch();
}



 ?>
