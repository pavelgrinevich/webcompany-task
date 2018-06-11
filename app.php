<?php
require_once './lib/router.php';
require_once './lib/visits.php';

use Lib\Router;
use Lib\Visits;

$app = new Router;
$visits = new Visits;

$app->get('/', function() use ($visits)
{
  $visits->inc('cities');
  include './views/cities/index.php';
});

$app->get('/users', function() use ($visits)
{
  $visits->inc('users');
  include './views/users/index.php';
});

$app->get('/search', function() use ($visits)
{
  $visits->inc('search');
  include './views/search/index.php';
});

$app->notFound(function()
{
  include './views/404.php';
});
