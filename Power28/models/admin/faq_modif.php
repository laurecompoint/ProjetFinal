<?php

function adminfaq()
{
    $db = dbConnect();
    $query = $db->query('SELECT * FROM faq');
    return $query->fetchAll();
}

function faqdelate($faq_id)
{
    $db = dbConnect();
    $query = $db->prepare('DELETE FROM faq WHERE id = ?');
    $query->execute ([ $faq_id ]);

}
function insertfaq($question, $reponse,  $category_id, $is_published)
{
    $db = dbConnect();


    $faq = $db->prepare('INSERT INTO faq (question, reponse, category_id, is_published, created_at) VALUES(?, ?, ?, ?, NOW())');
    $faq ->execute(array(
        $question,
        $reponse,
        $category_id,
        $is_published,
    ));
    $faq ->closeCursor();
}
function modiffaq($question, $reponse, $category_id, $id){
    $db = dbConnect();

    $query = $db->prepare('UPDATE faq SET
		question = :question,
		reponse = :reponse,
		category_id = :category_id
		WHERE id = :id'
    );

    $query->execute(
        [
            'question' =>  $question,
            'reponse' => $reponse,
            'category_id' => $category_id,
            'id' => $id,
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
