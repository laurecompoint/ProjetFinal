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
    $result = $query->execute ([ $faq_id ]
    );

    if($result){
        $message = "supression";
    }
    else{
        $message = "erreur";
    }
    return $message;

}
function insertfaq($question, $answer,  $category_id, $is_published)
{
    $db = dbConnect();


    $faq = $db->prepare('INSERT INTO faq (question, answer, category_id, is_published, created_at) VALUES(?, ?, ?, ?, NOW())');
    $faq ->execute(array(
        $question,
        $answer,
        $category_id,
        $is_published,
    ));
    if($faq){
        require_once('index.php?page=forum&forum_id=1');
    }
    else{
        $message = "Impossible d'enregistrer le nouveau faq..";
    }
    return $message;
}
function udaptefaq($question, $answer, $category_id, $id){
    $db = dbConnect();

    $faqudapte = $db->prepare('UPDATE faq SET
		question = :question,
		answer = :answer,
		category_id = :category_id
		WHERE id = :id'
    );

    $faqudapte->execute(
        [
            'question' =>  $question,
            'answer' => $answer,
            'category_id' => $category_id,
            'id' => $id,
        ]
    );
    if($faqudapte){
        header('location:index.php?admin=faq_list');
        exit;
    }
    else{
        $message = "Impossible d'enregistrer lA FAQ...";
    }
    return $message;
}
function faqId()
{
    $db = dbConnect();
    $query = $db->prepare('SELECT * FROM faq WHERE id = ?');
    $query->execute(array($_GET['faq_id']));
    return $query->fetch();
}



 ?>
