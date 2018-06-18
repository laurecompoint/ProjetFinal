
<?php

function getFaq()
{
    $db = dbConnect();

    $query = $db->prepare('SELECT * FROM faq ');

    $query->execute();

    return $query->fetchAll();


}
function getCategories(){

    $db = dbConnect();

    $query = $db->query('SELECT * FROM category');

    return $query->fetchAll();


}
?>



