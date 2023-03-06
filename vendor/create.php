<?php

//Добавление нового продукта


/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once '../config/connect.php';

/*
 * Создаем переменные со значениями, которые были получены с $_POST
 */

$title = $_POST['title'];
$country = $_POST['country'];
$city = $_POST['city'];
$street = $_POST['street'];
$house_number = $_POST['house_number'];



/*
 * Делаем запрос на добавление новой строки в таблицу 
 */

mysqli_query($connect,"INSERT INTO `сultural institution` (`id_c`, `title`, `country`, `city`, `street`, `house_number`)
 VALUES (null, '$title', '$country', '$city', '$street', '$house_number')");

header('Location: /');



