<?php
$cities = '';

$city = <<<EOD
  <div class='cpsity'>
  <h3>Гродно</h3>
  <span>
    <input type="hidden" name="id" value="30" >
    <input type="submit" name="del_fors_city" onclick="return confirm('Вы действительно хотите удалить город?')" value="Удалить" >
  </span>
  <span>
    <input type="hidden" name="id" value="30" >
    <input type="submit" name="edit_fors_city" value="Редактировать" >
  </span>
  </div>
EOD;

for ($i = 0; $i < 4; $i++) { 
  $cities .= $city;
}

return <<<EOD
  <div class="post">
    <div class="postheader"></div>
    <div class="postcontent"> 
      <h2>Список городов</h2>               
      <div class="form flrig">
        <input type="submit" name="ins" value="Добавить" >
        <input type="submit" name="sort" value="Сортировать" >          
      </div>
      {$cities}
    </div>
    <div class="postbottom"></div>
  </div>
EOD;
