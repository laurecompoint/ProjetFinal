<?php

function admincategory()
{
    $db = dbConnect();
    $query = $db->query('SELECT * FROM category');
    return $query->fetchAll();
}

function admindelate()
{
    $db = dbConnect();
    $query = $db->prepare('DELETE FROM category WHERE id = ?');
    $query->execute ([ $_GET['category_id'] ]);

}
function ajoutercategory(){
    $db = dbConnect();
    $query = $db->prepare('INSERT INTO category (name) VALUES (?)');
    $newCategory = $query->execute(
        [
            $_POST['name'],
        ]
    );
    return $newCategory;
}
function modifcategory(){
    $db = dbConnect();

    $query = $db->prepare('UPDATE category SET
		name = :name,
		WHERE id = :id'
    );

    $query->execute(
        [
            'name' => $_POST['name'],
            'id' => $_POST['id']
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