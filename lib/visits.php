<?php
namespace Lib;

class Visits
{
  private $visits;
  private static $cookie = 'counter';

  function __construct()
  {
    if (!isset($_COOKIE[self::$cookie])) 
    {
      $this->visits['general'] = 0;
      $this->visits['cities'] = 0;
      $this->visits['users'] = 0;
      $this->visits['search'] = 0;

      $this->set($this->visits);
    }
  }

  private function set($data)
  {
    setcookie(self::$cookie, serialize($data), time() + 86400);
    $_COOKIE[self::$cookie] = serialize($data);
  }

  public static function get()
  {
    return unserialize($_COOKIE[self::$cookie]);
  }

  public function inc($property)
  {
    $this->visits = self::get();

    ++$this->visits['general'];
    ++$this->visits[$property];

    $this->set($this->visits);
  }
}
