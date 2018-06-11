
<?php

function getFaq()
{
    $db = dbConnect();

    $query = $db->prepare('SELECT * FROM faq WHERE category_id = ? AND is_published = 1 ORDER BY created_at DESC');

    $query->execute( array($_GET['category_id']) );

    return $query->fetchAll();


}
?>



