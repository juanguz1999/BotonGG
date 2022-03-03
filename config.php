<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('46479244231-85meh2sc6ibs1aumqv4hm9bf7sdirupl.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/BotonGG/indexV2.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?> Close your php here  