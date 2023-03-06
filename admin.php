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
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
      <title>Панель Администратора</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.rtl.min.css">
      
 </head>
 
<style>
    
    th,td{
        padding: 10px;
        width: 100px;
        height: 10px;
    }
   /*  th{
        background:#606060;
        color: #fff;
    }
    td{
        background: #b5b5b5;
    } */
</style>

 <body>
    <h3>Добавить учреждение культуры</h3>
 <form action="/vendor/create.php" method="post">
        <p>Название</p>
        <input type="text" class="form-control" placeholder="Введите название учреждения культуры" name="title" autocomplete="off">
        <!-- <input type="text" name="title" placeholder="Введите название учреждения культуры"> -->
        <p>Страна</p>
        <input type="text" class="form-control" placeholder="Введите название страны" name="country" autocomplete="off">
        <!-- <input type="text" name="country" placeholder="Введите название страны"> -->
        <p>Город</p>
        <input type="text" class="form-control" placeholder="Введите название города" name="city" autocomplete="off">
        <!-- <input type="text" name="city" placeholder="Введите название города"> -->
        <p>Улица</p>
        <input type="text" class="form-control" placeholder="Введите название улицы" name="street" autocomplete="off">
       <!--  <input type="text" name="street" placeholder="Введите название улицы"> -->
        <p>Номер дома</p>
        <input type="number" class="form-control" placeholder="Введите номер дома" name="house_number" autocomplete="off">
        <!-- <input type="number" name="house_number" placeholder="Введите номер дома"> -->
        <button type="submit" class="btn btn-primary" onclick="location='http://sos/admin.php'">Добавить</button>
        

        
    </form>
    <table>
        <tr>
            <th>id_c</th>
            <th>title</th>
            <th>country</th>
            <th>city</th>
            <th>street</th>
            <th>house_number</th>
            <th>Обновить</th>
            <th>Удалить</th>
        </tr>
         
            <?php
            $institutions = mysqli_query($connect, "SELECT * FROM `сultural institution`");
            $institutions = mysqli_fetch_all($institutions);
            foreach($institutions as $institution){
            ?>
                <tr>
                    <td><?=$institution[0]?></td>
                    <td><?=$institution[1]?></td>
                    <td><?=$institution[2]?></td>
                    <td><?=$institution[3]?></td>
                    <td><?=$institution[4]?></td>
                    <td><?=$institution[5]?></td>
                    <td><a href="update.php?id_c=<?=$institution[0]?>">Update</a></td>
                    <td><a href="vendor\delete.php?id_c=<?=$institution[0]?>">Delete</a></td>
                </tr>

            <?php
            
            }
            ?>
        
    </table>
  

 </body>
 </html>
  

 </body>
 </html>