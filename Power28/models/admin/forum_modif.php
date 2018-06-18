<?php

function adminforum()
{
    $db = dbConnect();
    $query = $db->query('SELECT * FROM forum');
    return $query->fetchAll();
}

function forumdelate($forum_id)
{
    $db = dbConnect();
    $query = $db->prepare('DELETE FROM forum WHERE id = ?');
    $query->execute ([ $forum_id ]);

}

function insertforum($name, $content,  $category_id, $is_published)
{
    $db = dbConnect();


    $forum = $db->prepare('INSERT INTO forum (name, content, category_id, is_published, created_at) VALUES(?, ?, ?, ?, NOW())');
    $forum ->execute(array(
        $name,
        $content,
        $category_id,
        $is_published,
    ));
    $forum ->closeCursor();
}
function modifforum($name, $content, $category, $is_published, $id){

    $db = dbConnect();

    $query = $db->prepare('UPDATE forum SET
		name = :name,
		content = :content,
		category_id = :category_id,
		is_published = :is_published
		WHERE id = :id'
    );

    $query->execute(
        [
            'name' =>  $name,
            'content' => $content,
            'category_id' => $category,
            'is_published' => $is_published,
            'id' => $id,
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
