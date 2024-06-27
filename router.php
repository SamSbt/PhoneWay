<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
  '/' => __DIR__ . '/controllers/index.php',
  '/articles' => __DIR__ . '/controllers/articles.php',
  '/tag' => __DIR__ . '/controllers/tag.php',
];

function routeToController($uri, $routes)
{
  if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
  } else {
    // abort();
  }
}

// function abort($code = 404)
// {
//   http_response_code($code);
//   require __DIR__ . "/views/{$code}.php";
//   die();
// }

routeToController($uri, $routes);
