<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('30639041895-eeuqsk4kpm79ucek7lc0kfd8aik3m8pg.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost:8888/BotonGG/indexV2.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?> Close your php here  