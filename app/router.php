<?php

define('BASE_PATH', __DIR__ . '/../');

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

<<<<<<< HEAD
$PATHS = [
    'GET' => [
        '/' => 'app/controllers/index.php',
        '/historia'=>'app/controllers/historia.php',
        '/contacto' => 'app/controllers/contacto.php',
        '/articulos' =>  'app/controllers/articulos.php',
        '/beneficios-del-mate' =>  'app/controllers/articulos/beneficios-del-mate.php',
        '/como-preparar-un-mate' =>  'app/controllers/articulos/como-preparar-un-mate.php',
        '/como-curar-un-mate' =>  'app/controllers/articulos/como-curar-un-mate.php',
    ],
    'POST' => [
        '/contacto' => 'app/views/contacto-resp.php'
    ]
];

if (isset($PATHS[$requestMethod][$uri])) {
    require BASE_PATH . $PATHS[$requestMethod][$uri];
} else {
    abort();
=======
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
>>>>>>> ae32c394f085233ea41da602e644e863f4faacfd
}

function abort($code = 404){
    http_response_code(404);
    require BASE_PATH . "app/views/404.php";
    die();

};

