<?php
if(!isset($_SESSION['user'])){
    header('location:index.php?page=login');
    exit;
}

require_once ('views/front/paiement.php');

require_once('assets/stripe/stripe-php/init.php');

if(isset($_POST) && isset($_POST['totalInput'])) {
    $_SESSION['originalAmount'] = $_POST['totalInput'];
}

// Set your secret key: remember to change this to your live secret key in production
// See your keys here: https://dashboard.stripe.com/account/apikeys
\Stripe\Stripe::setApiKey("sk_test_PJRgUiiJktt9fkx66Q5inqtM");

// Token is created using Checkout or Elements!
// Get the payment token ID submitted by the form:
if(isset($_POST['stripeToken']) && !is_null($_POST['stripeToken']) ){
    $token = $_POST['stripeToken'];
    $amount = $_POST['customChekoutAmmount'];
    $charge = \Stripe\Charge::create([
        'amount' => $amount,
        'currency' => 'eur',
        'description' => 'Example charge',
        'source' => $token,
    ]);
}
?>
