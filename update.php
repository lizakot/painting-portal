<?php

    /*
     * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
     */

    require_once './config/connect.php';

    /*
     * Получаем ID продукта из адресной строки - /product.php?id=1
     */

    $id_c = $_GET['id_c'];

    /*
     * Делаем выборку строки с полученным ID выше
     */

    $institution = mysqli_query($connect, "SELECT * FROM `сultural institution` WHERE `id_c` = '$id_c'");

    /*
     * Преобразовывем полученные данные в нормальный массив
     * Используя функцию mysqli_fetch_assoc массив будет иметь ключи равные названиям столбцов в таблице
     */

    $institution = mysqli_fetch_assoc($institution);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update</title>
</head>
<body>
    <h3>Обновить</h3>
    <form action="vendor/update.php" method="post">
        <input type="hidden" name="id_c" value="<?= $institution['id_c'] ?>">
        <p>Название</p>
        <input type="text" name="title" value="<?= $institution['title'] ?>">
        <p>Страна</p>
        <input type="text" name="country" value="<?= $institution['country'] ?>">
        <p>Город</p>
        <input type="text" name="city" value="<?= $institution['city'] ?>">
        <p>Улица</p>
        <input type="text" name="street" value="<?= $institution['street'] ?>">
        <p>Номер дома</p>
        <input type="number" name="house_number" value="<?= $institution['house_number'] ?>"> <br>
        <button type="submit">Update</button>
    </form>
</body>
</html>