<?php
namespace Lib;

class Router
{
  private $method;
  private $uri;
  private $flagNotFound = true;

  function __construct()
  {
    $this->method = $_SERVER['REQUEST_METHOD'];
    $this->uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
  }

  function get($route, $callback)
  {
    if ($this->method !== 'GET') return;
    if ($this->uri !== $route) return;
    $this->flagNotFound = false;
    $callback();
  }

  function post($route, $callback)
  {
    if ($this->method !== 'POST') return;
    if ($this->uri !== $route) return;
    $this->flagNotFound = false;
    $callback();
  }

  function notFound($callback)
  {
    if ($this->flagNotFound)
    {
      header("{$_SERVER['SERVER_PROTOCOL']} 404 Not Found");
      $callback();
    }
  }
}
