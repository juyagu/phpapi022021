<?php
session_start();

/*if (php_sapi_name() != 'cli') {
    throw new Exception('This application must be run on the command line.');
}*/

/**
 * Returns an authorized API client.
 * @return Google_Client the authorized client object
 */
require_once 'gService.php';
function getClient()
{
    require_once 'googleClient.php';
    if(isset($_SESSION['token_google'])){
        $accessToken = $_SESSION['token_google'];
        $client->setAccessToken($accessToken);
    }

    // If there is no previous token or it's expired.
    if ($client->isAccessTokenExpired()) {
        // Refresh the token if possible, else fetch a new one.
        if ($client->getRefreshToken()) {
            $client->fetchAccessTokenWithRefreshToken($client->getRefreshToken());
        } else {
            
            $authUrl = $client->createAuthUrl();
            header('Location:'. $authUrl);
            $accessToken = $client->fetchAccessTokenWithAuthCode($authCode);
            $client->setAccessToken($accessToken);
            if (array_key_exists('error', $accessToken)) {
                throw new Exception(join(', ', $accessToken));
            }
        }
    }
    return $client;
}
$client = getClient();
$_SESSION['token'] = $client->getAccessToken()['access_token']; 
$service = new Google_Service_Gmail($client);
require_once 'enviar.php';