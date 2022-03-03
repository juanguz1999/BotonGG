<?php
require_once 'vendor/autoload.php';
 
// init configuration
$clientID = '46479244231-85meh2sc6ibs1aumqv4hm9bf7sdirupl.apps.googleusercontent.com';
$clientSecret = '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';
$redirectUri = 'http://localhost/BotonGG/indexV3.php';
  
// create Client Request to access Google API
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");
 
// authenticate code from Google OAuth Flow
if (isset($_GET['code'])) {
  $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
  $client->setAccessToken($token['access_token']);
  
  // get profile info
  $google_oauth = new Google_Service_Oauth2($client);
  $google_account_info = $google_oauth->userinfo->get();
  $email =  $google_account_info->email;
  $name =  $google_account_info->name;
 
  // now you can use this profile info to create account in your website and make user logged in.
} else {?>
<div class="container d-flex align-items-center flex-column"">
            <div class="row-cols-1">
                <div class="col">
                    <img class="mb-4" src="img/Logo PNG.png" alt="" height="50" width="155">
                </div>
            </div>
            <div class="row-cols-1">
                <h1 class="h3 mb-3 fw-normal">Iniciar Sesion</h1>
            </div>
    <?php
  echo "<a href='".$client->createAuthUrl()."'>Iniciar Sesion</a>";
}
?>