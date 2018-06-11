<?php

function adminfaq()
{
    $db = dbConnect();
    $query = $db->query('SELECT * FROM faq');
    return $query->fetchAll();
}

function faqdelate()
{
    $db = dbConnect();
    $query = $db->prepare('DELETE FROM faq WHERE id = ?');
    $query->execute ([ $_GET['faq_id'] ]);

}
function ajouterfaq(){
    $db = dbConnect();
    $query = $db->prepare('INSERT INTO faq (question, reponse, category_id) VALUES (?, ?, ?)');
    $newfaq = $query->execute(
        [
            $_POST['question'],
            $_POST['reponse'],
            $_POST['category_id'],
        ]
    );
    return $newfaq;
}
function modiffaq(){
    $db = dbConnect();

    $query = $db->prepare('UPDATE faq SET
		question = :question,
		reponse = :reponse,
		category_id = :icategory_id,
		WHERE id = :id'
    );

    $query->execute(
        [
            'question' =>  $_POST['question'],
            'reponse' => $_POST['reponse'],
            'category_id' => $_POST['category_id'],
            'id' => $_POST['id'],
        ]
    );
}
function faqId()
{
    $db = dbConnect();
    $query = $db->prepare('SELECT * FROM faq WHERE id = ?');
    $query->execute(array($_GET['faq_id']));
    return $query->fetch();
}



 ?>
