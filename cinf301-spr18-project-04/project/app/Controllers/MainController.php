<?php
namespace App\Controllers;
use App\Renderer as Renderer;

/**
 * MainController class that provides the main view home page
 * for the application.
 * 
 * @author dplante
 *
 */
class MainController
{
    public function home()
    {
        $title = 'Sorting Extravaganza!';
        echo "true2";
        $view = new Renderer('views/main/');
        $view->title = $title;
        $view->render('home.php');
    }

    public function error()
    {
        $view = new Renderer('views/main/');
        $view->render('error.php');
    }
    public function twitter()
    {
        $view = new Renderer('views/Twitter/');
        $view->render('twitter.php');
    }
}
