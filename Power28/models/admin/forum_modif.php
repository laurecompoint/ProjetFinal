<?php

function adminforum()
{
    $db = dbConnect();
    $query = $db->query('SELECT * FROM forum');
    return $query->fetchAll();
}

function forumdelate()
{
    $db = dbConnect();
    $query = $db->prepare('DELETE FROM forum WHERE id = ?');
    $query->execute ([ $_GET['forum_id'] ]);

}

function ajouterforum(){
    $db = dbConnect();
    $query = $db->prepare('INSERT INTO forum (question, reponse, category_id) VALUES (?, ?, ?, ? NOW())');
    $newforum = $query->execute(
        [
            $_POST['name'],
            $_POST['content'],
            $_POST['category_id'],
            $_POST['is_published'],
            $_POST['created_at'],
        ]
    );
    return $newforum;
}
function modifforum(){
    $db = dbConnect();

    $query = $db->prepare('UPDATE forum SET
		name = :name,
		content = :content,
		category_id = :category_id,
		is_published = :is_published,
		created_at = created_at,
		WHERE id = :id'
    );

    $query->execute(
        [
            'name' =>  $_POST['name'],
            'content' => $_POST['content'],
            'category_id' => $_POST['category_id'],
            'is_published' => $_POST['is_published'],
            'created_at' => $_POST['created_at'],
            'id' => $_POST['id'],
        ]
    );
}
function forumId()
{
    $db = dbConnect();
    $query = $db->prepare('SELECT * FROM forum WHERE id = ?');
    $query->execute(array($_GET['forum_id']));
    return $query->fetch();
}


 ?>
