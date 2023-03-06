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
    <button><a href="index.php" class="sort">На главную страницу</a></button>
    <!-- main content -->
    <main>
        <!-- about section -->
        <section id="about" class="about py-7">
            <div class="container">
                <div class="about-content grid">
                    <div class="about-left">
                        <img src="./images/Восход солнца.jpg" alt="">
                    </div>
                    <div class="about-right">
                        <div class="title">
                            <h2>Восход солнца</h2>
                        </div>
                        <?php
                        if ($result = $connect->query("SELECT picture.date_of_writing, artist.full_name FROM picture JOIN artist ON picture.artist = artist.id_a where picture.id_p= 6"))
                            $var = $result->fetch_object();
                        $result->close();

                        if ($result = $connect->query("SELECT style.style_title FROM picture JOIN style on picture.style=style.id_s where picture.id_p= 6"))
                            $var1 = $result->fetch_object();
                        $result->close();

                        if ($result = $connect->query("SELECT technique.technique_title FROM picture JOIN technique on picture.technique=technique.id_t where picture.id_p= 6")) {
                            $var2 = $result->fetch_object();
                            $result->close();

                            if ($result = $connect->query("SELECT kursovaya.`сultural institution`.title from picture join kursovaya.`сultural institution` on
                        picture.cultural_institution = kursovaya.`сultural institution`.id_c where picture.id_p =6;"))
                            $var3 = $result->fetch_object();
                            $result->close();
                        }
                        ?>
                        <p class="lead">Дата написания:</a><?php echo $var->date_of_writing ?></p>
                        <p class="lead"><a href = "ar1.php">Художник:<?php echo $var->full_name ?></p>
                        <p class="lead"><a href = "st1.php">Стиль:<?php echo $var1->style_title ?></p>
                        <p class="lead"><a href = "t1.php">Техника:<?php echo $var2->technique_title ?></p>
                        <p class="lead"><a href = "cul1.php">Учреждение культуры:<?php echo $var3->title ?></p>
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
                        <img src="./images/ирисы_glav.jpg" alt="">
                    </div>
                    <div class="about-right">
                        <div class="title">
                            <h2>Ирисы</h2>
                        </div>
                        <?php
                        if ($result = $connect->query("SELECT picture.date_of_writing, artist.full_name FROM picture JOIN artist ON picture.artist = artist.id_a where picture.id_p= 5"))
                            $var = $result->fetch_object();
                        $result->close();

                        if ($result = $connect->query("SELECT style.style_title FROM picture JOIN style on picture.style=style.id_s where picture.id_p= 5"))
                            $var1 = $result->fetch_object();
                        $result->close();

                        if ($result = $connect->query("SELECT technique.technique_title FROM picture JOIN technique on picture.technique=technique.id_t where picture.id_p= 5")) {
                            $var2 = $result->fetch_object();
                            $result->close();

                        if ($result = $connect->query("SELECT kursovaya.`сultural institution`.title from picture join kursovaya.`сultural institution` on
                        picture.cultural_institution = kursovaya.`сultural institution`.id_c where picture.id_p =5;"))
                            $var3 = $result->fetch_object();
                            $result->close();
                        }
                        ?>
                        <p class="lead">Дата написания:<?php echo $var->date_of_writing ?></p>
                        <p class="lead">Художник:<?php echo $var->full_name ?></p>
                        <p class="lead">Стиль:<?php echo $var1->style_title ?></p>
                        <p class="lead">Техника:<?php echo $var2->technique_title ?></p>
                        <p class="lead">Учреждение культуры:<?php echo $var3->title ?></p>
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
                        <img src="./images/мона.jpg" alt="">
                    </div>
                    <div class="about-right">
                        <div class="title">
                            <h2>Мона Лиза</h2>
                        </div>
                        <?php
                        if ($result = $connect->query("SELECT picture.date_of_writing, artist.full_name FROM picture JOIN artist ON picture.artist = artist.id_a where picture.id_p= 8"))
                            $var = $result->fetch_object();
                        $result->close();

                        if ($result = $connect->query("SELECT style.style_title FROM picture JOIN style on picture.style=style.id_s where picture.id_p= 8"))
                            $var1 = $result->fetch_object();
                        $result->close();

                        if ($result = $connect->query("SELECT technique.technique_title FROM picture JOIN technique on picture.technique=technique.id_t where picture.id_p= 8")) {
                            $var2 = $result->fetch_object();
                            $result->close();

                            if ($result = $connect->query("SELECT kursovaya.`сultural institution`.title from picture join kursovaya.`сultural institution` on
                        picture.cultural_institution = kursovaya.`сultural institution`.id_c where picture.id_p =8;"))
                            $var3 = $result->fetch_object();
                            $result->close();
                        }
                        ?>
                        <p class="lead">Дата написания:<?php echo $var->date_of_writing ?></p>
                        <p class="lead">Художник:<?php echo $var->full_name ?></p>
                        <p class="lead">Стиль:<?php echo $var1->style_title ?></p>
                        <p class="lead">Техника:<?php echo $var2->technique_title ?></p>
                        <p class="lead">Учреждение культуры:<?php echo $var3->title ?></p>
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
                        <img src="./images/память.jpg" alt="">
                    </div>
                    <div class="about-right">
                        <div class="title">
                            <h2>Постоянство памяти</h2>
                        </div>
                        <?php
                        if ($result = $connect->query("SELECT picture.date_of_writing, artist.full_name FROM picture JOIN artist ON picture.artist = artist.id_a where picture.id_p= 9"))
                            $var = $result->fetch_object();
                        $result->close();

                        if ($result = $connect->query("SELECT style.style_title FROM picture JOIN style on picture.style=style.id_s where picture.id_p= 9"))
                            $var1 = $result->fetch_object();
                        $result->close();

                        if ($result = $connect->query("SELECT technique.technique_title FROM picture JOIN technique on picture.technique=technique.id_t where picture.id_p= 9")) {
                            $var2 = $result->fetch_object();
                            $result->close();

                            if ($result = $connect->query("SELECT kursovaya.`сultural institution`.title from picture join kursovaya.`сultural institution` on
                            picture.cultural_institution = kursovaya.`сultural institution`.id_c where picture.id_p =9;"))
                            $var3 = $result->fetch_object();
                            $result->close();
                        }
                        ?>
                        <p class="lead">Дата написания:<?php echo $var->date_of_writing ?></p>
                        <p class="lead">Художник:<?php echo $var->full_name ?></p>
                        <p class="lead">Стиль:<?php echo $var1->style_title ?></p>
                        <p class="lead">Техника:<?php echo $var2->technique_title ?></p>
                        <p class="lead">Учреждение культуры:<?php echo $var3->title ?></p>
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
                        <img src="./images/ночь.jpg" alt="">
                    </div>
                    <div class="about-right">
                        <div class="title">
                            <h2>Звездная ночь</h2>
                        </div>
                        <?php
                        if ($result = $connect->query("SELECT picture.date_of_writing, artist.full_name FROM picture JOIN artist ON picture.artist = artist.id_a where picture.id_p= 4"))
                            $var = $result->fetch_object();
                        $result->close();

                        if ($result = $connect->query("SELECT style.style_title FROM picture JOIN style on picture.style=style.id_s where picture.id_p= 4"))
                            $var1 = $result->fetch_object();
                        $result->close();

                        if ($result = $connect->query("SELECT technique.technique_title FROM picture JOIN technique on picture.technique=technique.id_t where picture.id_p= 4")) {
                            $var2 = $result->fetch_object();
                            $result->close();

                            if ($result = $connect->query("SELECT kursovaya.`сultural institution`.title from picture join kursovaya.`сultural institution` on
                            picture.cultural_institution = kursovaya.`сultural institution`.id_c where picture.id_p =4;"))
                            $var3 = $result->fetch_object();
                            $result->close();
                        }
                        ?>
                        <p class="lead">Дата написания:<?php echo $var->date_of_writing ?></p>
                        <p class="lead">Художник:<?php echo $var->full_name ?></p>
                        <p class="lead">Стиль:<?php echo $var1->style_title ?></p>
                        <p class="lead">Техника:<?php echo $var2->technique_title ?></p>
                        <p class="lead">Учреждение культуры:<?php echo $var3->title ?></p>
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
                        <img src="./images/завод_1.jpg" alt="">
                    </div>
                    <div class="about-right">
                        <div class="title">
                            <h2>Кирпичный завод в Тортосе</h2>
                        </div>
                        <?php
                        if ($result = $connect->query("SELECT picture.date_of_writing, artist.full_name FROM picture JOIN artist ON picture.artist = artist.id_a where picture.id_p= 10"))
                            $var = $result->fetch_object();
                        $result->close();

                        if ($result = $connect->query("SELECT style.style_title FROM picture JOIN style on picture.style=style.id_s where picture.id_p= 10"))
                            $var1 = $result->fetch_object();
                        $result->close();

                        if ($result = $connect->query("SELECT technique.technique_title FROM picture JOIN technique on picture.technique=technique.id_t where picture.id_p= 10")) {
                            $var2 = $result->fetch_object();
                            $result->close();
                            if ($result = $connect->query("SELECT kursovaya.`сultural institution`.title from picture join kursovaya.`сultural institution` on
                            picture.cultural_institution = kursovaya.`сultural institution`.id_c where picture.id_p =10;"))
                            $var3 = $result->fetch_object();
                            $result->close();
                        }
                        ?>
                        <p class="lead">Дата написания:<?php echo $var->date_of_writing ?></p>
                        <p class="lead">Художник:<?php echo $var->full_name ?></p>
                        <p class="lead">Стиль:<?php echo $var1->style_title ?></p>
                        <p class="lead">Техника:<?php echo $var2->technique_title ?></p>
                        <p class="lead">Учреждение культуры:<?php echo $var3->title ?></p>
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
                        <img src="./images/фрида_гл.jpg" alt="">
                    </div>
                    <div class="about-right">
                        <div class="title">
                            <h2>Автопортрет со срезанными волосами</h2>
                        </div>
                        <?php
                        if ($result = $connect->query("SELECT picture.date_of_writing, artist.full_name FROM picture JOIN artist ON picture.artist = artist.id_a where picture.id_p= 11"))
                            $var = $result->fetch_object();
                        $result->close();

                        if ($result = $connect->query("SELECT style.style_title FROM picture JOIN style on picture.style=style.id_s where picture.id_p= 11"))
                            $var1 = $result->fetch_object();
                        $result->close();

                        if ($result = $connect->query("SELECT technique.technique_title FROM picture JOIN technique on picture.technique=technique.id_t where picture.id_p= 11")) {
                            $var2 = $result->fetch_object();
                            $result->close();

                            if ($result = $connect->query("SELECT kursovaya.`сultural institution`.title from picture join kursovaya.`сultural institution` on
                            picture.cultural_institution = kursovaya.`сultural institution`.id_c where picture.id_p =11;"))
                            $var3 = $result->fetch_object();
                            $result->close();
                        }
                        ?>
                        <p class="lead">Дата написания:<?php echo $var->date_of_writing ?></p>
                        <p class="lead">Художник:<?php echo $var->full_name ?></p>
                        <p class="lead">Стиль:<?php echo $var1->style_title ?></p>
                        <p class="lead">Техника:<?php echo $var2->technique_title ?></p>
                        <p class="lead">Учреждение культуры:<?php echo $var3->title ?></p>
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
                        <img src="./images/гол_глав.jpg" alt="">
                    </div>
                    <div class="about-right">
                        <div class="title">
                            <h2>Давид с головой Голиафа</h2>
                        </div>
                        <?php
                        if ($result = $connect->query("SELECT picture.date_of_writing, artist.full_name FROM picture JOIN artist ON picture.artist = artist.id_a where picture.id_p= 13"))
                            $var = $result->fetch_object();
                        $result->close();

                        if ($result = $connect->query("SELECT style.style_title FROM picture JOIN style on picture.style=style.id_s where picture.id_p= 13"))
                            $var1 = $result->fetch_object();
                        $result->close();

                        if ($result = $connect->query("SELECT technique.technique_title FROM picture JOIN technique on picture.technique=technique.id_t where picture.id_p= 13")) {
                            $var2 = $result->fetch_object();
                            $result->close();

                            if ($result = $connect->query("SELECT kursovaya.`сultural institution`.title from picture join kursovaya.`сultural institution` on
                        picture.cultural_institution = kursovaya.`сultural institution`.id_c where picture.id_p =13;"))
                            $var3 = $result->fetch_object();
                            $result->close();
                        }
                        ?>
                        <p class="lead">Дата написания:<?php echo $var->date_of_writing ?></p>
                        <p class="lead">Художник:<?php echo $var->full_name ?></p>
                        <p class="lead">Стиль:<?php echo $var1->style_title ?></p>
                        <p class="lead">Техника:<?php echo $var2->technique_title ?></p>
                        <p class="lead">Учреждение культуры:<?php echo $var3->title ?></p>
                        <a href="#work" class="btn-down">
                            <i class="fas fa-chevron-down"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- end of about section -->

    <!-- typewriting js -->
    <script src="typewriting-master/typewriting.js"></script>
</body>

</html>