<?php

namespace App\Controllers;
use App\Renderer as Renderer;





class UserController
{
    public function index()
    {

            $view = new Renderer('views/User/');
            $view->render('index.php');


    }
    public function error()
    {
        $view = new Renderer('views/main/');
        $view->render('error.php');
    }
}