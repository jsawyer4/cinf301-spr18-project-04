<?php
require_once __DIR__ . '/vendor/autoload.php';
require_once("config.inc.php");
require_once('vendor/j7mbo/twitter-api-php/TwitterAPIExchange.php');
session_start();
if (!isset($_SESSION["user"])) {
    $_SESSION["user"]='NULL';
}
if (isset($_GET['Account'])){
    $_SESSION["user"]= $_GET['Account'];
}
if (!isset($_SESSION["decode"])) {
    $_SESSION["decode"]='NULL';
}
if (!isset($_SESSION["token"])) {
    $_SESSION["token"]= array(
        'oauth_access_token' => OAUTH_ACCESS_TOKEN,
        'oauth_access_token_secret' => OAUTH_ACCESS_TOKEN_SECRET,
        'consumer_key' => CONSUMER_KEY,
        'consumer_secret' => CONSUMER_SECRET);
}
if (!isset($_SESSION["tweet"])) {
    $_SESSION["tweet"]='NULL';
}
if (isset($_GET['controller']) && isset($_GET['action'])) {
    $controller = $_GET['controller'];
    $action = $_GET['action'];
} else {
    $controller = 'main';
    $action = 'home';
}


require_once ('views/layout.php');
