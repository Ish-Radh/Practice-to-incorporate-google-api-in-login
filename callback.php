<?php
require_once "googleconfig.php";

if(isset($_GET['code']))
{

    $token=$client->fetchAccessTokenWithAuthCode($_GET['code']);
    $_SESSION['access_token']=$token;
}

//getting profile info
$google_oauth=new Google_Service_Oauth2($client);
$google_account_info = $google_oauth->userinfo->get();



?>