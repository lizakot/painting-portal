<?php
$host = "127.0.0.1";  // Хост, у нас все локально
$user = "root";    // Имя созданного вами пользователя
$pass = "root"; // Установленный вами пароль пользователю
$db_name = "kursovaya";   // Имя базы данных
$connect = mysqli_connect($host, $user, $pass, $db_name); // Соединяемся с базой

// Ругаемся, если соединение установить не удалось
if (!$connect) {
    echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
    exit;
}