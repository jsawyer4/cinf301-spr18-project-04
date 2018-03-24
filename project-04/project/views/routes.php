<?php

/**
 * @param $controller
 * @param $action
 */
function route($controller, $action) {
    
    switch($controller) {
      case 'main':
        $controller = new \App\Controllers\MainController();
      break;
      case 'algorithms':
        $controller = new \App\Controllers\AlgorithmsController();
      break;
        case 'twitter':
            $controller= new \App\Controllers\TwitterController();
            break;
        case 'User':
            $controller= new \App\Controllers\UserController();
            break;
    }
    $controller->{ $action }();
  }

  $controllers = array('main' => ['home', 'error'],
                       'algorithms' => ['index', 'show'],
                        'twitter' => ['index','view'],
                            'User'=>['index,error']);

  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      route($controller, $action);
    } else {
      route('main', 'error');
    }
  } else {
    route('main', 'error');
  }
