<?php

require_once('models/front/contact.php');

if(isset($_POST['envoyer']))
{
    getmail();
}



require_once('views/front/contact.php');

?>