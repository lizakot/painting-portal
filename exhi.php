<?php
require_once 'C:\Users\User\Desktop\open server\OpenServer\domains\sos\config\connect.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Восход солнца </title>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel = "stylesheet" href = "css/style.css">
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
    <section id = "about" class = "about py-7">
            <div class = "container">
                <div class = "about-content grid">
                    <div class = "about-left">
                        <img src = "./images/oazis_glav.jpg" alt = "">
                    </div>
                    <div class = "about-right">
                        <div class = "title">
                            <h2>Великолепие оазисос Узбекистана</h2>
                        </div>
                        <?php
                        if ($result = $connect->query("SELECT exhibition.start_date, exhibition.end_date, kursovaya.`сultural institution`.title FROM exhibition JOIN kursovaya.`сultural institution` on exhibition.location = kursovaya.`сultural institution`.id_c where exhibition.id_e  = 3"))
                        $var = $result->fetch_object();
                        $result->close();
                        ?>
                        <p class = "lead"><a href = "luvr.php">Учреждение культуры:<?php echo $var->title?></p>
                        <p class = "lead">Начало:<?php echo $var->start_date?></p>
                        <p class = "lead">Окончание:<?php echo $var->end_date?></p>
                        <a href = "#work" class = "btn-down">
                            <i class = "fas fa-chevron-down"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section id = "about" class = "about py-7">
            <div class = "container">
                <div class = "about-content grid">
                    <div class = "about-left">
                        <img src = "./images/deva_glav.jpg" alt = "">
                    </div>
                    <div class = "about-right">
                        <div class = "title">
                            <h2>Визуализация Девы Марии</h2>
                        </div>
                        <?php
                        if ($result = $connect->query("SELECT exhibition.start_date, exhibition.end_date, kursovaya.`сultural institution`.title FROM exhibition JOIN kursovaya.`сultural institution` on exhibition.location = kursovaya.`сultural institution`.id_c where exhibition.id_e  = 4"))
                        $var = $result->fetch_object();
                        $result->close();
                        ?>
                        <p class = "lead">Учреждение культуры:<?php echo $var->title?></p>
                        <p class = "lead">Начало:<?php echo $var->start_date?></p>
                        <p class = "lead">Окончание:<?php echo $var->end_date?></p>
                        <a href = "#work" class = "btn-down">
                            <i class = "fas fa-chevron-down"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section id = "about" class = "about py-7">
            <div class = "container">
                <div class = "about-content grid">
                    <div class = "about-left">
                        <img src = "./images/word_glav.jpg" alt = "">
                    </div>
                    <div class = "about-right">
                        <div class = "title">
                            <h2>Слова и образы</h2>
                        </div>
                        <?php
                        if ($result = $connect->query("SELECT exhibition.start_date, exhibition.end_date, kursovaya.`сultural institution`.title FROM exhibition JOIN kursovaya.`сultural institution` on exhibition.location = kursovaya.`сultural institution`.id_c where exhibition.id_e  = 6"))
                        $var = $result->fetch_object();
                        $result->close();
                        ?>
                        <p class = "lead">Учреждение культуры:<?php echo $var->title?></p>
                        <p class = "lead">Начало:<?php echo $var->start_date?></p>
                        <p class = "lead">Окончание:<?php echo $var->end_date?></p>
                        <a href = "#work" class = "btn-down">
                            <i class = "fas fa-chevron-down"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section id = "about" class = "about py-7">
            <div class = "container">
                <div class = "about-content grid">
                    <div class = "about-left">
                        <img src = "./images/isku_glav.jpg" alt = "">
                    </div>
                    <div class = "about-right">
                        <div class = "title">
                            <h2>Искусство ХХ века</h2>
                        </div>
                        <?php
                        if ($result = $connect->query("SELECT exhibition.start_date, exhibition.end_date, kursovaya.`сultural institution`.title FROM exhibition JOIN kursovaya.`сultural institution` on exhibition.location = kursovaya.`сultural institution`.id_c where exhibition.id_e  = 7"))
                        $var = $result->fetch_object();
                        $result->close();
                        ?>
                        <p class = "lead">Учреждение культуры:<?php echo $var->title?></p>
                        <p class = "lead">Начало:<?php echo $var->start_date?></p>
                        <p class = "lead">Окончание:<?php echo $var->end_date?></p>
                        <a href = "#work" class = "btn-down">
                            <i class = "fas fa-chevron-down"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
        <!-- end of about section -->
        
       <!-- typewriting js -->
    <script src = "typewriting-master/typewriting.js"></script>
</body>
</html>
   