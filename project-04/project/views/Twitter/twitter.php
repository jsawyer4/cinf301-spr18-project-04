<?php


$decoded=$_SESSION['decode'];
$picture = $decoded[0]->user->profile_image_url;

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

                      <p><a href="?controller=main&action=home">Home</a></p>

                    </h3>
                </div>


            </div>
        </div>
        <div class="col-sm-6">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="media">
                        <a class="media-left" href="#fake">
                            <img alt="" class="media-object img-rounded" src="<?php echo $picture; ?>">
                        </a>
                        <div class="media-body">
                            <div class="form-group has-feedback">
                                <label class="control-label sr-only" for="inputSuccess5">Hidden label</label>
                                <input type="text" class="form-control" id="search2" aria-describedby="search">
                                <span class="glyphicon glyphicon-camera form-control-feedback" aria-hidden="true"></span>
                                <span id="search2" class="sr-only">(success)</span>
                            </div>
                        </div>
                    </div>
                </div>
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
        </div>



    </div>
</div>


</html>



