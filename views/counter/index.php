<?php
require_once './lib/visits.php';
use Lib\Visits;

$visits = Visits::get();

$counter = "
  <div class='post'>
    <div class='postheader'></div>
    <div class='postcontent'> 
      <h2>Общее количество загрузок страниц сайта = <b>{$visits['general']}</b></h2>
    </div>
    <div class='postbottom'>
      <h3 style='margin-left: 25px;'>Вы посещали эту страницу <b>{$visits[$page]}</b> раз</h3>
    </div>
  </div>
";
