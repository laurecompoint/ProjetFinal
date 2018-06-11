<?php

function admincommentaire()
{
    $db = dbConnect();
    $query = $db->query('SELECT * FROM commentaire');
    return $query->fetchAll();
}

function commentairedelate()
{
    $db = dbConnect();
    $query = $db->prepare('DELETE FROM commentaire WHERE id = ?');
    $query->execute ([ $_GET['commentaire_id'] ]);

}
function ajoutercommentaire(){
    $db = dbConnect();
    $query = $db->prepare('INSERT INTO commentaire (content, forum_id, is_published, created_at) VALUES (?, ?, ?, NOW())');
    $newcommentaire = $query->execute(
        [
            $_POST['content'],
            $_POST['is_published'],
            $_POST['forum_id'],
        ]
    );
    return $newcommentaire;
}
function modifcommentaire(){
    $db = dbConnect();

    $query = $db->prepare('UPDATE commentaire SET
		content = :content,
		forum_id = :forum_id,
		is_published = :is_published,
		WHERE id = :id'
    );

    $query->execute(
        [
            'content' =>  $_POST['content'],
            'is_published' => $_POST['is_published'],
            'forum_id' => $_POST['forum_id'],
            'id' => $_POST['id'],
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
