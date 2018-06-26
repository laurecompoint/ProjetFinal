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
    if($forum){
        header('location:index.php?admin=forum_list');
        exit;
    }
    else{
        $message = "Impossible d'enregistrer le forum...";
    }
    return $message;
}
function updateforum($name, $content, $category, $is_published, $id){

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
    if($query){
        header('location:index.php?admin=formu_list');
        exit;
    }
    else{
        $message = "Impossible de modifier le forum...";
    }
    return $message;
}
function forumId()
{
    $db = dbConnect();
    $query = $db->prepare('SELECT * FROM forum WHERE id = ?');
    $query->execute(array($_GET['forum_id']));
    return $query->fetch();
}


 ?>
