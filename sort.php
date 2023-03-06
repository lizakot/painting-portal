<?php
require_once 'C:\Users\User\Desktop\open server\OpenServer\domains\sos\config\connect.php';
?>


<!DOCTYPE html>
<html>
<link rel="stylesheet" href="css/sort.css">

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

  <h1>Сортировка художников по алфавиту</h1>

  <p>Нажмите кнопку, чтобы отсортировать художников по возрастанию (от A до Я):</p>
  <p>Щелкните еще раз, чтобы отсортировать художников по убыванию (от Я до A):</p>

  <button onclick="sortListDir()">Сортировать</button>

  <ul id="id01">
    <li>
      <img src="./images/Микеланджело.jpg" alt="">
      <div>
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
      <img src="./images/Клод.jpg" alt="">
      <div>
        <?php
        if ($result = $connect->query("SELECT artist.full_name, artist.date_of_birth, artist.date_of_death, artist.country, artist.amount_of_paintings, style.style_title FROM artist JOIN style ON artist.style = style.id_s WHERE artist.id_a = 2"))
          $var = $result->fetch_object();
        $result->close();
        if ($result = $connect->query("SELECT technique.technique_title FROM artist JOIN technique ON artist.technique = technique.id_t WHERE artist.id_a  = 2"))
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
      <img src="./images/Леонардо.jpg" alt="">
      <div>
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
      <img src="./images/Вангог.jpg" alt="">
      <div>
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
      <img src="./images/Фрида.jpg" alt="">
      <div>
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
      <img src="./images/Эдварт.jpeg" alt="">
      <div>
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
      <img src="./images/Пабло.jpeg" alt="">
      <div>
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
      <img src="./images/Сальвадор.jpg" alt="">
      <div>
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

  <script>
    function sortListDir() {
      var list, i, switching, b, shouldSwitch, dir, switchcount = 0;
      list = document.getElementById("id01");
      switching = true;
      // Задать направление сортировки по возрастанию:
      dir = "asc";
      // Сделайте цикл, который будет продолжаться до тех пор, пока переключение не будет сделано:
      while (switching) {
        // начните с того, что скажите: никакого переключения не происходит:
        switching = false;
        b = list.getElementsByTagName("LI");
        // Цикл по всем элементам списка:
        for (i = 0; i < (b.length - 1); i++) {
          // начните с того, что не должно быть никакого переключения:
          shouldSwitch = false;
          /* проверьте, должен ли следующий элемент поменяться местами с текущим элементом,
          на основе направления сортировки (asc или desc): */
          if (dir == "asc") {
            if (b[i].innerHTML.toLowerCase() > b[i + 1].innerHTML.toLowerCase()) {
              /* если следующий элемент находится в алфавитном порядке ниже текущего элемента,
              отметьте как переключатель и разорвите петлю: */
              shouldSwitch = true;
              break;
            }
          } else if (dir == "desc") {
            if (b[i].innerHTML.toLowerCase() < b[i + 1].innerHTML.toLowerCase()) {
              /* если следующий элемент находится в алфавитном порядке выше текущего элемента,
              отметьте как переключатель и разорвите петлю: */
              shouldSwitch = true;
              break;
            }
          }
        }
        if (shouldSwitch) {
          /* Если переключатель был отмечен, сделайте переключатель
          и отметьте, что переключение было сделано: */
          b[i].parentNode.insertBefore(b[i + 1], b[i]);
          switching = true;
          // Каждый раз, когда выполняется переключение, увеличьте количество переключателей на 1:
          switchcount++;
        } else {
          /* Если переключение не было сделано и направление "asc",
          установите направление на "desc" и снова запустите цикл while. */
          if (switchcount == 0 && dir == "asc") {
            dir = "desc";
            switching = true;
          }
        }
      }
    }
  </script>

</body>

</html>