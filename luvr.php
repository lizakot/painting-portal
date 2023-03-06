<?php
require_once 'C:\Users\User\Desktop\open server\OpenServer\domains\sos\config\connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Восход солнца </title>
            <!-- font awesome -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <link rel="stylesheet" href="css/style.css">
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
    <main>
    <section id="about" class="about py-7">
        <div class="container">
            <div class="about-content grid">
                <div class="about-left">
                    <img src="./images/luvr_1.jpg" alt="">
                </div>
                <div class="about-right">
                    <div class="title">
                        <h2>Музей Лувра</h2>
                    </div>
                    <?php
                    if ($result = $connect->query("SELECT kursovaya.`сultural institution`.title, kursovaya.`сultural institution`.country, kursovaya.`сultural institution`.city,
                        kursovaya.`сultural institution`.street, kursovaya.`сultural institution`.house_number from kursovaya.`сultural institution` where kursovaya.`сultural institution`.id_c = 3"))
                        $var = $result->fetch_object();
                    $result->close();
                    ?>
                    <p class="lead">Страна:<?php echo $var->country ?></p>
                    <p class="lead">Город:<?php echo $var->city ?></p>
                    <p class="lead">Улица:<?php echo $var->street ?></p>
                    <p class="lead">Дом:<?php echo $var->house_number ?></p>
                    <a href="#work" class="btn-down">
                        <i class="fas fa-chevron-down"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    </main>
</body>

</html>