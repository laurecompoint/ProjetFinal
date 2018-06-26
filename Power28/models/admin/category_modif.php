<?php

function admincategory()
{
    $db = dbConnect();
    $query = $db->query('SELECT * FROM category');
    return $query->fetchAll();
}

function admindelate($category_id)
{
    $db = dbConnect();
    $query = $db->prepare('DELETE FROM category WHERE id = ?');
    $result = $query->execute($category_id);
    return $result;

}

function insertcategory($name)
{
    $db = dbConnect();

    $insert = $db->prepare('INSERT INTO category (name) VALUES (?)');
    $insert->execute(array(
        $name,
    ));
    if($insert){
        header('location:index.php?admin=category_list');
        exit;
    }
    else{
        $message = "Impossible d'enregistrer la nouvelle categories...";
    }
    return $message;

}
function updatecategory($name, $id){

    $db = dbConnect();

    $query = $db->prepare('UPDATE category SET
		name = :name
		WHERE id = :id'
    );

    $query->execute(
        [
            'name' => $name,
            'id' => $id
        ]
    );
    if($query){
        header('location:index.php?admin=category_list');
        exit;
    }
    else{
        $message = "Impossible de modifier la nouvelle categories...";
    }
    return $message;

}
function categoryId()
{
        $db = dbConnect();
        $query = $db->prepare('SELECT * FROM category WHERE id = ?');
        $query->execute(array($_GET['category_id']));
        return $query->fetch();
}
?>
