<?php
function getmail()
{
$message = $_POST['message'];
$header = 'FROM site@logal.dev';
mail('compointlaure@gmail.com', 'formulaire de contact', $message, $header);
}

?>