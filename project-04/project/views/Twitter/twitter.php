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

$picture = $decoded[0]->user->profile_image_url;
echo $picture

?>
<!DOCTYPE html>
<html>


<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    <a href="#"><img class="img-responsive" alt="" src="<?php echo $picture; ?>"</a>
                    <div class="row">
                        <div class="col-xs-3">
                            <h5>
                                <small>LISTED</small>
                                <?php $listed = $decoded[0]->user->listed_count; echo $listed ?>
                            </h5>
                        </div>
                        <div class="col-xs-4">
                            <h5>
                                <small>FRIENDS</small>
                                <?php $friends = $decoded[0]->user->friends_count; echo $friends?>
                            </h5>
                        </div>
                        <div class="col-xs-5">
                            <h5>
                                <small>FOLLOWERS</small>
                                <?php $followers = $decoded[0]->user->followers_count; echo $followers ?>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel panel-default panel-custom">
                <div class="panel-heading">
                    <h3 class="panel-title">

                    </h3>
                </div>


            </div>
        </div>
        <div class="col-sm-6">

                <div class="panel-body">
                    <div class="media">
                        <a class="media-left" href="#fake">
                            <img alt="" class="media-object img-rounded" src="<?php echo $picture; ?>">
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading"><?php $name = $decoded[0]->user->name; echo $name ?></h4>
                            <p><?php $text= $decoded[0]->text; echo $text ?></p>
                            <ul class="nav nav-pills nav-pills-custom">
                                <li><a href="#"><span class="glyphicon glyphicon-share-alt"></span></a></li>
                                <li><a href="#"><span class="glyphicon glyphicon-retweet"></span></a></li>
                                <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                                <li><a href="#"><span class="glyphicon glyphicon-option-horizontal"></span></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="media">
                        <a class="media-left" href="#fake">
                            <img alt="" class="media-object img-rounded" src="<?php echo $picture; ?>">
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">Media heading</h4>
                            <p><?php $text= $decoded[1]->text; echo $text ?></p>
                            <ul class="nav nav-pills nav-pills-custom">
                                <li><a href="#"><span class="glyphicon glyphicon-share-alt"></span></a></li>
                                <li><a href="#"><span class="glyphicon glyphicon-retweet"></span></a></li>
                                <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                                <li><a href="#"><span class="glyphicon glyphicon-option-horizontal"></span></a></li>
                            </ul>
                        </div>

                    </div>
                    <div class="media">
                        <a class="media-left" href="#fake">
                            <img alt="" class="media-object img-rounded" src="<?php echo $picture; ?>">
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading"><?php $name = $decoded[0]->user->name; echo $name ?></h4>
                            <p><?php $text= $decoded[2]->text; echo $text ?></p>
                            <ul class="nav nav-pills nav-pills-custom">
                                <li><a href="#"><span class="glyphicon glyphicon-share-alt"></span></a></li>
                                <li><a href="#"><span class="glyphicon glyphicon-retweet"></span></a></li>
                                <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                                <li><a href="#"><span class="glyphicon glyphicon-option-horizontal"></span></a></li>
                            </ul>
                        </div>

                    </div>
                    <div class="media">
                        <a class="media-left" href="#fake">
                            <img alt="" class="media-object img-rounded" src="<?php echo $picture; ?>">
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading"><?php $name = $decoded[0]->user->name; echo $name ?></h4>
                            <p><?php $text= $decoded[3]->text; echo $text ?></p>
                            <ul class="nav nav-pills nav-pills-custom">
                                <li><a href="#"><span class="glyphicon glyphicon-share-alt"></span></a></li>
                                <li><a href="#"><span class="glyphicon glyphicon-retweet"></span></a></li>
                                <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                                <li><a href="#"><span class="glyphicon glyphicon-option-horizontal"></span></a></li>
                            </ul>
                        </div>

                    </div>
                    <div class="media">
                        <a class="media-left" href="#fake">
                            <img alt="" class="media-object img-rounded" src="<?php echo $picture; ?>">
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading"><?php $name = $decoded[0]->user->name; echo $name ?></h4>
                            <p><?php $text= $decoded[4]->text; echo $text ?></p>
                            <ul class="nav nav-pills nav-pills-custom">
                                <li><a href="#"><span class="glyphicon glyphicon-share-alt"></span></a></li>
                                <li><a href="#"><span class="glyphicon glyphicon-retweet"></span></a></li>
                                <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                                <li><a href="#"><span class="glyphicon glyphicon-option-horizontal"></span></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

            <br>
            <br>
            <br>


            <div class="panel panel-default">
                <div class="panel-heading">Prova</div>
                <div class="panel-body">
                    <ul class="nav nav-pills">
                        <li role="presentation" class="active"><a href="#">Home</a></li>
                        <li role="presentation"><a href="#">Profile</a></li>
                        <li role="presentation"><a href="#">Messages</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="panel panel-default panel-custom">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Who to follow
                        <small><a href="#">Refresh</a> ● <a href="#">View all</a></small>
                    </h3>
                </div>
                <div class="panel-body">
                    <div class="media">
                        <div class="media-left">
                            <img src="http://placehold.it/32x32" alt="" class="media-object img-rounded">
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Nome e cognome</h4>
                            <a href="#" class="btn btn-default btn-xs">
                                +
                                <span class="glyphicon glyphicon-user"></span>
                                Follow
                            </a>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <img src="http://placehold.it/32x32" alt="" class="media-object img-rounded">
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Nome e cognome</h4>
                            <a href="#" class="btn btn-default btn-xs">
                                +
                                <span class="glyphicon glyphicon-user"></span>
                                Follow
                            </a>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <img src="http://placehold.it/32x32" alt="" class="media-object img-rounded">
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Nome e cognome</h4>
                            <a href="#" class="btn btn-default btn-xs">
                                +
                                <span class="glyphicon glyphicon-user"></span>
                                Follow
                            </a>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <a href="www.google.it">
                        <span class="glyphicon glyphicon-user"></span>
                        Find people you know
                    </a>
                </div>
            </div>
            <div class="well well-sm">
                <ul class="list-inline">
                    <li>© 2015 Twitter</li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Help</a></li>
                    <li><a href="#">Terms</a></li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Cookies</a></li>
                    <li><a href="#">Ads info</a></li>
                    <li><a href="#">Brand</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Status</a></li>
                    <li><a href="#">Apps</a></li>
                    <li><a href="#">Jobs</a></li>
                    <li><a href="#">Advertise</a></li>
                    <li><a href="#">Businesses</a></li>
                    <li><a href="#">Media</a></li>
                    <li><a href="#">Developers</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>


</html>



