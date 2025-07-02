<?php

define('BASE_PATH', __DIR__ . '/../');

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

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
}

function abort($code = 404){
    http_response_code(404);
    require BASE_PATH . "app/views/404.php";
    die();

};

