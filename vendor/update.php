<?php

//Обновление информации о продукте

/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once 'C:\Users\User\Desktop\open server\OpenServer\domains\sos\config\connect.php';

/*
 * Создаем переменные со значениями, которые были получены с $_POST
 */


$id_c = $_POST['id_c'];
$title = $_POST['title'];
$country = $_POST['country'];
$city = $_POST['city'];
$street = $_POST['street'];
$house_number = $_POST['house_number'];

/*
 * Делаем запрос на изменение строки в таблице products
 */

mysqli_query($connect, "UPDATE `сultural institution` SET `title` = '$title', `country` = '$country', `city` = '$city', `street` = '$street', `house_number` = '$house_number' WHERE `сultural institution`.`id_c` = '$id_c'");


header('Location: http://sos/admin.php/');