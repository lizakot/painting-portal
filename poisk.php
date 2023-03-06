<?php
require_once 'C:\Users\User\Desktop\open server\OpenServer\domains\sos\config\connect.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Поиск</title>
  <link rel="stylesheet" href="css/poisk.css">
</head>

<body>
  <nav class="navbar">
    <ul>
      <li><a href="artist.php">artist</a></li>
      <li><a href="picture.php">picture</a></li>
      <li><a href="film.php">film about artist</a> </li>
      <li><a href="style.php">style</a> </li>
      <li><a href="tech.php">technique</a></li>
      <li><a href="cult.php">cultural institution</a> </li>
      <li><a href="exhi.php">exhibition</a> </li>
    </ul>
  </nav>
  <h1>Поиск по художникам</h1>
  <div class="col-lg12 form">
    <input type="text" id="elastic" placeholder="Введите ключевое слово">
  </div>
  <div class="col-lg12">
    <ul class="elastic">
      <li>
        <div>
          <!-- <img src="./images/Микеланджело.jpg" width="400" height="400" alt=""> -->
          <?php
          if ($result = $connect->query("SELECT artist.full_name, artist.date_of_birth, artist.date_of_death, artist.country, artist.amount_of_paintings, style.style_title FROM artist JOIN style ON artist.style = style.id_s WHERE artist.id_a = 10"))
            $var = $result->fetch_object();
          $result->close();
          if ($result = $connect->query("SELECT technique.technique_title FROM artist JOIN technique ON artist.technique = technique.id_t WHERE artist.id_a  = 10"))
            $var1 = $result->fetch_object();
          $result->close();
          ?>
          <p class="lead">ФИО:<?php echo $var->full_name ?></p>
          <p class="lead">Дата рождения:<?php echo $var->date_of_birth ?></p>
          <p class="lead">Дата смерти:<?php echo $var->date_of_death ?></p>
          <p class="lead">Страна:<?php echo $var->country ?></p>
          <p class="lead">Количество написанных картин:<?php echo $var->amount_of_paintings ?></p>
          <p class="lead">Стиль:<?php echo $var->style_title ?></p>
          <p class="lead">Техника:<?php echo $var1->technique_title ?></p>
        </div>

      </li>
      <li>
        <div>
          <!-- <img src="./images/Клод.jpg" width="400" height="400" alt=""> -->
          <?php
          if ($result = $connect->query("SELECT artist.full_name, artist.date_of_birth, artist.date_of_death, artist.country, artist.amount_of_paintings, style.style_title FROM artist JOIN style ON artist.style = style.id_s WHERE artist.id_a = 2"))
            $var = $result->fetch_object();
          $result->close();
          if ($result = $connect->query("SELECT technique.technique_title FROM artist JOIN technique ON artist.technique = technique.id_t WHERE artist.id_a  = 2"))
            $var1 = $result->fetch_object();
          $result->close();
          ?>
          <p class="lead">ФИО:<?php echo $var->full_name?></p>
          <p class="lead">Дата рождения:<?php echo $var->date_of_birth ?></p>
          <p class="lead">Дата смерти:<?php echo $var->date_of_death ?></p>
          <p class="lead">Страна:<?php echo $var->country ?></p>
          <p class="lead">Количество написанных картин:<?php echo $var->amount_of_paintings ?></p>
          <p class="lead">Стиль:<?php echo $var->style_title ?></p>
          <p class="lead">Техника:<?php echo $var1->technique_title ?></p>
        </div>
      </li>
      <li>

        <div>
          <!-- <img src="./images/Леонардо.jpg" width="400" height="400" alt=""> -->
          <?php
          if ($result = $connect->query("SELECT artist.full_name, artist.date_of_birth, artist.date_of_death, artist.country, artist.amount_of_paintings, style.style_title FROM artist JOIN style ON artist.style = style.id_s WHERE artist.id_a = 3"))
            $var = $result->fetch_object();
          $result->close();
          if ($result = $connect->query("SELECT technique.technique_title FROM artist JOIN technique ON artist.technique = technique.id_t WHERE artist.id_a  = 3"))
            $var1 = $result->fetch_object();
          $result->close();
          ?>
          <p class="lead">ФИО:<?php echo $var->full_name ?></p>
          <p class="lead">Дата рождения:<?php echo $var->date_of_birth ?></p>
          <p class="lead">Дата смерти:<?php echo $var->date_of_death ?></p>
          <p class="lead">Страна:<?php echo $var->country ?></p>
          <p class="lead">Количество написанных картин:<?php echo $var->amount_of_paintings ?></p>
          <p class="lead">Стиль:<?php echo $var->style_title ?></p>
          <p class="lead">Техника:<?php echo $var1->technique_title ?></p>
        </div>
      </li>
      <li>

        <div>
          <!-- <img src="./images/Вангог.jpg" width="400" height="400" alt=""> -->
          <?php
          if ($result = $connect->query("SELECT artist.full_name, artist.date_of_birth, artist.date_of_death, artist.country, artist.amount_of_paintings, style.style_title FROM artist JOIN style ON artist.style = style.id_s WHERE artist.id_a = 1"))
            $var = $result->fetch_object();
          $result->close();
          if ($result = $connect->query("SELECT technique.technique_title FROM artist JOIN technique ON artist.technique = technique.id_t WHERE artist.id_a  = 1"))
            $var1 = $result->fetch_object();
          $result->close();
          ?>
          <p class="lead">ФИО:<?php echo $var->full_name ?></p>
          <p class="lead">Дата рождения:<?php echo $var->date_of_birth ?></p>
          <p class="lead">Дата смерти:<?php echo $var->date_of_death ?></p>
          <p class="lead">Страна:<?php echo $var->country ?></p>
          <p class="lead">Количество написанных картин:<?php echo $var->amount_of_paintings ?></p>
          <p class="lead">Стиль:<?php echo $var->style_title ?></p>
          <p class="lead">Техника:<?php echo $var1->technique_title ?></p>
        </div>
      </li>
      <li>

        <div>
          <<!-- img src="./images/Фрида.jpg" width="400" height="400" alt=""> -->
          <?php
          if ($result = $connect->query("SELECT artist.full_name, artist.date_of_birth, artist.date_of_death, artist.country, artist.amount_of_paintings, style.style_title FROM artist JOIN style ON artist.style = style.id_s WHERE artist.id_a = 8"))
            $var = $result->fetch_object();
          $result->close();
          if ($result = $connect->query("SELECT technique.technique_title FROM artist JOIN technique ON artist.technique = technique.id_t WHERE artist.id_a  = 8"))
            $var1 = $result->fetch_object();
          $result->close();
          ?>
          <p class="lead">ФИО:<?php echo $var->full_name ?></p>
          <p class="lead">Дата рождения:<?php echo $var->date_of_birth ?></p>
          <p class="lead">Дата смерти:<?php echo $var->date_of_death ?></p>
          <p class="lead">Страна:<?php echo $var->country ?></p>
          <p class="lead">Количество написанных картин:<?php echo $var->amount_of_paintings ?></p>
          <p class="lead">Стиль:<?php echo $var->style_title ?></p>
          <p class="lead">Техника:<?php echo $var1->technique_title ?></p>
        </div>
      </li>
      <li>

        <div>
          <!-- <img src="./images/Эдварт.jpeg" width="400" height="400" alt=""> -->
          <?php
          if ($result = $connect->query("SELECT artist.full_name, artist.date_of_birth, artist.date_of_death, artist.country, artist.amount_of_paintings, style.style_title FROM artist JOIN style ON artist.style = style.id_s WHERE artist.id_a = 5"))
            $var = $result->fetch_object();
          $result->close();
          if ($result = $connect->query("SELECT technique.technique_title FROM artist JOIN technique ON artist.technique = technique.id_t WHERE artist.id_a  = 5"))
            $var1 = $result->fetch_object();
          $result->close();
          ?>
          <p class="lead">ФИО:<?php echo $var->full_name ?></p>
          <p class="lead">Дата рождения:<?php echo $var->date_of_birth ?></p>
          <p class="lead">Дата смерти:<?php echo $var->date_of_death ?></p>
          <p class="lead">Страна:<?php echo $var->country ?></p>
          <p class="lead">Количество написанных картин:<?php echo $var->amount_of_paintings ?></p>
          <p class="lead">Стиль:<?php echo $var->style_title ?></p>
          <p class="lead">Техника:<?php echo $var1->technique_title ?></p>
        </div>
      </li>
      <li>

        <div>
          <!-- <img src="./images/Пабло.jpeg" width="400" height="400" alt=""> -->
          <?php
          if ($result = $connect->query("SELECT artist.full_name, artist.date_of_birth, artist.date_of_death, artist.country, artist.amount_of_paintings, style.style_title FROM artist JOIN style ON artist.style = style.id_s WHERE artist.id_a = 7"))
            $var = $result->fetch_object();
          $result->close();
          if ($result = $connect->query("SELECT technique.technique_title FROM artist JOIN technique ON artist.technique = technique.id_t WHERE artist.id_a  = 7"))
            $var1 = $result->fetch_object();
          $result->close();
          ?>
          <p class="lead">ФИО:<?php echo $var->full_name ?></p>
          <p class="lead">Дата рождения:<?php echo $var->date_of_birth ?></p>
          <p class="lead">Дата смерти:<?php echo $var->date_of_death ?></p>
          <p class="lead">Страна:<?php echo $var->country ?></p>
          <p class="lead">Количество написанных картин:<?php echo $var->amount_of_paintings ?></p>
          <p class="lead">Стиль:<?php echo $var->style_title ?></p>
          <p class="lead">Техника:<?php echo $var1->technique_title ?></p>
        </div>
      </li>
      <li>
        <div>
         <!--  <img src="./images/Сальвадор.jpg" width="400" height="400" alt=""> -->
          <?php
          if ($result = $connect->query("SELECT artist.full_name, artist.date_of_birth, artist.date_of_death, artist.country, artist.amount_of_paintings, style.style_title FROM artist JOIN style ON artist.style = style.id_s WHERE artist.id_a = 4"))
            $var = $result->fetch_object();
          $result->close();
          if ($result = $connect->query("SELECT technique.technique_title FROM artist JOIN technique ON artist.technique = technique.id_t WHERE artist.id_a  = 4"))
            $var1 = $result->fetch_object();
          $result->close();
          ?>
          <p class="lead">ФИО:<?php echo $var->full_name ?></p>
          <p class="lead">Дата рождения:<?php echo $var->date_of_birth ?></p>
          <p class="lead">Дата смерти:<?php echo $var->date_of_death ?></p>
          <p class="lead">Страна:<?php echo $var->country ?></p>
          <p class="lead">Количество написанных картин:<?php echo $var->amount_of_paintings ?></p>
          <p class="lead">Стиль:<?php echo $var->style_title ?></p>
          <p class="lead">Техника:<?php echo $var1->technique_title ?></p>
        </div>
      </li>
    </ul>
  </div>

  <!--  <input  type="submit" name="submit" value="Search">  -->
  </form>
  <script src="./typewriting-master/poisk.js"></script>
</body>

</html>