
<?php

require_once 'ggapi/vendor/autoload.php';

$clientId = '139900133939-do9sc8srv9ur4ti0d0ogrbgniep7ponn.apps.googleusercontent.com';
$clientSecret = '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';
$redirectLogin = 'http://localhost/baeshop.com';


$client = new Google_Client();

$client->setClientId($clientId);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectLogin);

$client->addScope("profile");
$client->addScope("email");

if (isset($_GET['code'])) {
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $client->setAccessToken($token);
} else {
    require_once('loginpage.php');
}

