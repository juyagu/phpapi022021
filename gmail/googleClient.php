<?php 
require __DIR__ . '/vendor/autoload.php';
$client = new Google_Client();
$client->setApplicationName('Gmail API PHP Quickstart');
$client->setScopes(Google_Service_Gmail::MAIL_GOOGLE_COM);
$client->setAuthConfig('credentials.json');
$client->setAccessType('offline');
$client->setPrompt('select_account consent');

// Load previously authorized token from a file, if it exists.
// The file token.json stores the user's access and refresh tokens, and is
// created automatically when the authorization flow completes for the first
// time.
$tokenPath = 'token.json';