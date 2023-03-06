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
            <title>Фильмы</title>
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
    <button><a href="index.php" class="sort">На главную страницу</a></button>

    <!-- main content -->
    <main>
        <section id="about" class="about py-7">
            <div class="container">
                <div class="about-content grid">
                    <div class="about-left">
                        <img src="./images/вечн_глав.png" alt="">
                    </div>
                    <div class="about-right">
                        <div class="title">
                            <h2>Информация о фильме</h2>
                        </div>
                        <?php
                        if ($result = $connect->query("SELECT kursovaya.`films about artists`.id_f, kursovaya.artist.full_name, kursovaya.`films about artists`. film_title, kursovaya.`films about artists`.director FROM kursovaya.`films about artists` JOIN kursovaya.artist ON kursovaya.artist.id_a = kursovaya.`films about artists`.artist where kursovaya.`films about artists`.id_f = 1"))
                        $var = $result->fetch_object();
                        $result->close();
                        ?>
                        <p class="lead"><a href = "вин.php">Художник :<?php echo $var->full_name ?></p>
                        <p class="lead">Название:<?php echo $var->film_title ?></p>
                        <p class="lead">Режиссёр:<?php echo $var->director ?></p>
                        <a href="#work" class="btn-down">
                        <i class="fas fa-chevron-down"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section id="about" class="about py-7">
            <div class="container">
                <div class="about-content grid">
                    <div class="about-left">
                        <img src="./images/prik_glav.jpeg" alt="">
                    </div>
                    <div class="about-right">
                        <div class="title">
                            <h2>Информация о фильме</h2>
                        </div>
                        <?php
                        if ($result = $connect->query("SELECT kursovaya.`films about artists`.id_f, kursovaya.artist.full_name, kursovaya.`films about artists`. film_title, kursovaya.`films about artists`.director FROM kursovaya.`films about artists` JOIN kursovaya.artist ON kursovaya.artist.id_a = kursovaya.`films about artists`.artist where kursovaya.`films about artists`.id_f = 4"))
                        $var = $result->fetch_object();
                        $result->close();
                        ?>
                        
                        <p class="lead">Художник:<?php echo $var->full_name ?></p>
                        <p class="lead">Название:<?php echo $var->film_title ?></p>
                        <p class="lead">Режиссёр:<?php echo $var->director ?></p>
                        <a href="#work" class="btn-down">
                            <i class="fas fa-chevron-down"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section id="about" class="about py-7">
            <div class="container">
                <div class="about-content grid">
                    <div class="about-left">
                        <img src="./images/frida_glav.jpg" alt="">
                    </div>
                    <div class="about-right">
                        <div class="title">
                            <h2>Информация о фильме</h2>
                        </div>
                        <?php
                        if ($result = $connect->query("SELECT kursovaya.`films about artists`.id_f, kursovaya.artist.full_name, kursovaya.`films about artists`. film_title, kursovaya.`films about artists`.director FROM kursovaya.`films about artists` JOIN kursovaya.artist ON kursovaya.artist.id_a = kursovaya.`films about artists`.artist where kursovaya.`films about artists`.id_f = 5"))
                        $var = $result->fetch_object();
                        $result->close();
                        ?>
                        
                        <p class="lead">Художник:<?php echo $var->full_name ?></p>
                        <p class="lead">Название:<?php echo $var->film_title ?></p>
                        <p class="lead">Режиссёр:<?php echo $var->director ?></p>
                        <a href="#work" class="btn-down">
                            <i class="fas fa-chevron-down"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section id="about" class="about py-7">
            <div class="container">
                <div class="about-content grid">
                    <div class="about-left">
                        <img src="./images/kava_glav.jpg" alt="">
                    </div>
                    <div class="about-right">
                        <div class="title">
                            <h2>Информация о фильме</h2>
                        </div>
                        <?php
                        if ($result = $connect->query("SELECT kursovaya.`films about artists`.id_f, kursovaya.artist.full_name, kursovaya.`films about artists`. film_title, kursovaya.`films about artists`.director FROM kursovaya.`films about artists` JOIN kursovaya.artist ON kursovaya.artist.id_a = kursovaya.`films about artists`.artist where kursovaya.`films about artists`.id_f = 9"))
                        $var = $result->fetch_object();
                        $result->close();
                        ?>
                        
                        <p class="lead">Художник:<?php echo $var->full_name ?></p>
                        <p class="lead">Название:<?php echo $var->film_title ?></p>
                        <p class="lead">Режиссёр:<?php echo $var->director ?></p>
                        <a href="#work" class="btn-down">
                            <i class="fas fa-chevron-down"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section id="about" class="about py-7">
            <div class="container">
                <div class="about-content grid">
                    <div class="about-left">
                        <img src="./images/live_glav.jpg" alt="">
                    </div>
                    <div class="about-right">
                        <div class="title">
                            <h2>Информация о фильме</h2>
                        </div>
                        <?php
                        if ($result = $connect->query("SELECT kursovaya.`films about artists`.id_f, kursovaya.artist.full_name, kursovaya.`films about artists`. film_title, kursovaya.`films about artists`.director FROM kursovaya.`films about artists` JOIN kursovaya.artist ON kursovaya.artist.id_a = kursovaya.`films about artists`.artist where kursovaya.`films about artists`.id_f = 8"))
                        $var = $result->fetch_object();
                        $result->close();
                        ?>
                    
                        <p class="lead">Художник:<?php echo $var->full_name ?></p>
                            <p class="lead">Название:<?php echo $var->film_title ?></p>
                            <p class="lead">Режиссёр:<?php echo $var->director ?></p>
                            <a href="#work" class="btn-down">
                                <i class="fas fa-chevron-down"></i>
                            </a>
                    </div>
                </div>
            </div>
        </section>
    </main>


    <script src="typewriting-master/typewriting.js"></script>
</body>

</html>