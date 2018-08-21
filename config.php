<?php

session_start();
##### DB Configuration #####
$servername = "localhost";
$username = "root";
$password = "";
$db = "jatin";

##### Google App Configuration #####
$googleappid = "520911359546-8a8b30l3ee0ef23j73is95h7gepqqf52.apps.googleusercontent.com"; 
$googleappsecret = "hJTObHzgA1uEsUbmb-_HwIN8"; 
// $redirectURL = "http://localhost/jatin/authenticate.php"; 
$redirectURL = "http://localhost/jatin/authenticate.php"; 

##### Create connection #####
$conn = new mysqli('localhost', 'root', '', 'jatin');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
##### Required Library #####
include_once 'src/Google/Google_Client.php';
include_once 'src/Google/contrib/Google_Oauth2Service.php';

$googleClient = new Google_Client();
$googleClient->setApplicationName('Login to CodeCastra.com');
$googleClient->setClientId($googleappid);
$googleClient->setClientSecret($googleappsecret);
$googleClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($googleClient);

?>