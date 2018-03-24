<?php
require_once('../vendor/j7mbo/twitter-api-php/TwitterAPIExchange.php');
require_once('../config.inc.php');

/**
 *
 * Documentation on use:
 *
 * Check out:  https://github.com/J7mbo/twitter-api-php/wiki/Twitter-API-PHP-Wiki
 *
 */

$settings = array(
    'oauth_access_token' => OAUTH_ACCESS_TOKEN,
    'oauth_access_token_secret' => OAUTH_ACCESS_TOKEN_SECRET,
    'consumer_key' => CONSUMER_KEY,
    'consumer_secret' => CONSUMER_SECRET
);

$test='Marvelisgayaf';
/*
 * Get User's Tweets
 */
$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
$getfield = '?screen_name='.$test;
$requestMethod = 'GET';
$twitter = new TwitterAPIExchange($settings);
$response = $twitter->setGetfield($getfield)
    ->buildOauth($url, $requestMethod)
    ->performRequest();

$decoded = json_decode($response);
$followers=
var_dump($decoded);






/*
 * Get followers
 */
$url = 'https://api.twitter.com/1.1/followers/ids.json';
$getfield = '?screen_name=Marvel';
$requestMethod = 'GET';

$twitter = new TwitterAPIExchange($settings);



echo $twitter->setGetfield($getfield)
    ->buildOauth($url, $requestMethod)
    ->performRequest();

?>
