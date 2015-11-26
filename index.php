<?php header('Content-Type: text/html; charset=utf-8');

include 'controllers.php';

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$path = explode("index.php", $url);
$path = $path[1];


if ($path == "" || $path == "/") {
    getAllUsers();
} elseif ($path == '/register') {
    if($_POST){
        registration($_POST);
    }else{
        registration(null);
    }
} elseif($path == '/login'){
    if($_POST){
        login($_POST);
    }else{
        login(null);
    }
}

