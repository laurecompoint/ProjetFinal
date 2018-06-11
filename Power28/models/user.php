
<?php

function getlogin(){

if(isset($_POST['login'])){
    $db = dbConnect();

    $query = $db->prepare('SELECT *
  							FROM user
  							WHERE email = ? AND password = ?');
    $query->execute( array( $_POST['email'], $_POST['password'] ) );
    $query->fetch();
}

}
function getcontrole(){
    $db = dbConnect();

    $query = $db->prepare('SELECT email FROM user WHERE email = ?');
    $query->execute(array($_POST['email']));

    $query->fetch();


}

function postregister()
{


    $db = dbConnect();

    $user = $db->prepare('INSERT INTO user (firstname, lastname, numerotel, adresse, ville, password, email) VALUES (?, ?, ?, ?, ?, ?, ?)');
    $newUser = $user->execute(
        [
            $_POST['firstname'],
            $_POST['lastname'],
            $_POST['numerotel'],
            $_POST['adresse'],
            $_POST['ville'],
            $_POST['password'],
            $_POST['email'],

        ]
    );
    return $newUser;

}


?>
