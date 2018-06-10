<?php
require './lib/router.php';
use Lib\Router;

$app = new Router;

$app->get('/', function()
{
  include './views/cities/index.php';
});

$app->get('/users', function()
{
  include './views/users/index.php';
});

$app->get('/search', function()
{
  include './views/search/index.php';
});

$app->notFound(function()
{
  include './views/404.php';
});
