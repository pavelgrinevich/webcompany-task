<?php
namespace Lib;

use PDO;

class DatabaseQuery
{
  private $mysql;

  function __construct()
  {
    $config = include './config/config.php';
    
    $this->mysql = mysqli_connect(
      "{$config->host}:{$config->port}", 
      $config->username, 
      $config->password
    );

    $dsn = "mysql:host={$config->host}:{$config->port}";
    $opt = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    $pdo = new PDO($dsn, $config->username, $config->password, $opt);
  }
}
