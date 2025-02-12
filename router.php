<?php
$url = $_SERVER['REQUEST_URI'];
//        if ($url == "/") {
//            require_once "controller/index.view.php";
//        }else if ($url == "/about"){
//            require_once "controller/about.php";
//        }elseif ($url == "/contact"){
//            require_once "controller/contact.php";
//        }

$routes =[
    "/" => "controller/index.php" ,
    "/about" => "controller/about.php" ,
    "/contact" => "controller/contact.php" ,
];
function routeTocontroller($url,$routes){
    if(array_key_exists($url, $routes)) {
        require $routes[$url];
    }else {
        abort(404);
    }

}
function abort($code = 404) {
    http_response_code($code);
    require_once "Code/views/{$code}.php";;
    die();
}
routeTocontroller($url,$routes);
