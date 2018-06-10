<?php
require './lib/router.php';
use Lib\Router;

$app = new Router;

$app->get('/', function()
{
  echo 'main page';
});

$app->notFound(function()
{
  echo '404 Not Found';
});
