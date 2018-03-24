<?php

$settings=$_SESSION['token'];
$test=$_SESSION['user'];
$getfield = '?screen_name='.$test;
$requestMethod = 'GET';
$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
$twitter = new TwitterAPIExchange($settings);
$response = $twitter->setGetfield($getfield)
    ->buildOauth($url, $requestMethod)
    ->performRequest();
$decoded = json_decode($response);


$_SESSION['decode']=$decoded;
?>
<!DOCTYPE html>
<html>
<body>
<div class="panel-body">
    <div class="media">
        <h4>You have selected <?php $name = $decoded[0]->user->name; echo $name ?></h4>
        <p>Do you want to view there <a href="?controller=twitter&action=view">tweets</a>. </p>
        <p>Or do you want to look for someone new <a href="?controller=main&action=home">home</a>.</p>
    </div>
</div>
</body>
</html>
