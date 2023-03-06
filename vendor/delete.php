<?php

//Удаление продукта

/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once 'C:\Users\User\Desktop\open server\OpenServer\domains\sos\config\connect.php';

/*
 * Получаем ID продукта из адресной строки
 */

$id_c = $_GET['id_c'];
$sql = "DELETE  FROM  `сultural institution` WHERE `сultural institution`.`id_c` = '$id_c'";
$result=mysqli_query($connect,$sql);
?>
<!-- //mysqli_query($connect, "DELETE  FROM  `сultural institution` WHERE `сultural institution`.`id_c` = '$id_c'");

//$institution = mysqli_fetch_assoc($institution);

//header('Location: /'); -->