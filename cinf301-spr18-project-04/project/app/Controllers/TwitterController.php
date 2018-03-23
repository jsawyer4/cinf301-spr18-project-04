<?php
namespace App\Controllers;
use App\Renderer as Renderer;

class TwitterController
{
    public function index()
    {

        $view = new Renderer('views/Twitter/');

        $view->render('twitter.php');

    }
}