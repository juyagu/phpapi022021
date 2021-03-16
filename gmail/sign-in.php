<?php
session_start();
require_once 'googleClient.php';

$authCode = $_GET['code'];
$accessToken = $client->fetchAccessTokenWithAuthCode($authCode);
$client->setAccessToken($accessToken);
//$tokenPath = 'token.json';

// Check to see if there was an error.
if (array_key_exists('error', $accessToken)) {
    throw new Exception(join(', ', $accessToken));
}
/*if (!file_exists(dirname($tokenPath))) {
    mkdir(dirname($tokenPath), 0700, true);
}*/

$_SESSION['token_google'] = $client->getAccessToken();
//file_put_contents($tokenPath, json_encode($client->getAccessToken()));
header('Location: index.php');
