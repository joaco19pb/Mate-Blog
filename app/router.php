<?php

define('BASE_PATH', __DIR__ . '/../');

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

if ($uri === '/') {
    require BASE_PATH . 'app/controllers/index.php';
}else if ($uri === '/historia') {
    require BASE_PATH . 'app/controllers/historia.php';
}else if ($uri === '/contacto') {
    if ($requestMethod === 'GET') {
        require BASE_PATH . 'app/controllers/contacto.php';
    } else if ($requestMethod === 'POST') {
        require BASE_PATH . 'app/views/contacto-resp.php';
    }
}else if ($uri === '/articulos') {
    require BASE_PATH . 'app/controllers/articulos.php'; 
}else if ($uri === '/beneficios-del-mate') {
    require BASE_PATH . 'app/controllers/articulos/beneficios-del-mate.php';
}else if ($uri === '/como-preparar-un-mate') {
    require BASE_PATH . 'app/controllers/articulos/como-preparar-un-mate.php';
}else if ($uri === '/como-curar-un-mate') {
    require BASE_PATH . 'app/controllers/articulos/como-curar-un-mate.php';
}else {
    abort(); 
}

function abort($code = 404){
    http_response_code(404);
    require BASE_PATH . "app/views/404.php";
    die();

};

