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
    $query->execute ($category_id);

}

function insertcategory($name)
{
    $db = dbConnect();

    $insert = $db->prepare('INSERT INTO category (name) VALUES (?)');
    $insert->execute(array(
        $name,
    ));

}
function modifcategory($name, $id){

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

}
function categoryId()
{
        $db = dbConnect();
        $query = $db->prepare('SELECT * FROM category WHERE id = ?');
        $query->execute(array($_GET['category_id']));
        return $query->fetch();
}
?>
