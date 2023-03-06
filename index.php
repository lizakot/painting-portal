<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Портал Живописи</title>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php
    $host = 'localhost';  // Хост, у нас все локально
    $user = 'root';    // Имя созданного вами пользователя
    $pass = 'root'; // Установленный вами пароль пользователю
    $db_name = 'kursovaya';   // Имя базы данных
    $link = mysqli_connect($host, $user, $pass, $db_name); // Соединяемся с базой

    // Ругаемся, если соединение установить не удалось
    if (!$link) {
        echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
        exit;
    }
    ?>
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
    <!-- header -->
    <header id="header" class="vh-100 flex">
        <div class="container">
            <div class="header-content">

                <h3>Портал Живописи</h3>

                <ul class="social-links">
                    <li>
                        <a href="https://ru-ru.facebook.com" class="flex">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://mobile.twitter.com" class="flex">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com" class="flex">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://ru.pinterest.com" class="flex">
                            <i class="fab fa-pinterest"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <!-- end of header -->

    <!-- main content -->
    <main>
        <!-- about section -->
        <section id="about" class="about py-7">
            <div class="container">
                <div class="about-content grid">
                    <div class="about-left">
                        <img src="./images/head.jpg" alt="">
                    </div>
                    <div class="about-right">
                        <div class="title">
                            <h2>О портале</h2>
                        </div>
                        <p class="lead">Целью создания является популяризация искусства живописи среди широких масс населения и удовлетворения тяги к прекрасному у людей, не имеющих возможности лично посетить музеи, часто находящиеся на внушительном расстоянии от их дома.</p>
                        <p class="lead">Все наши впечатления, фантазии, увиденные архитектурные ландшафты, предметы, пейзажи удивительным образом находят свое отображение в творческих работах великих мастеров и знаменитых художников. Можно сказать, что любая галерея картин насыщает зрителя таинственным колоритом высокого искусства и неповторимыми оттенками внутреннего мира их создателя.</p>
                        <a href="#work" class="btn-down">
                            <i class="fas fa-chevron-down"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of about section -->

        <!-- work section -->
        <section id="work" class="vh-100 flex py-7">
            <div class="container">
                <div class="work-content">
                    <div class="title">
                        <h2>Инструкция — как расшифровать картину?</h2>
                    </div>
                    <ul class="work-top grid">
                        <li class="lead"><i class="fas fa-dot-circle"></i>Узнайте дату создания картины, биографию живописца и жанр, в котором он работал, чтобы понять, почему он выбрал именно данную тему</li>
                        <li class="lead"><i class="fas fa-dot-circle"></i>Сюжет картины — библейский, исторический или литературный. Так зрителю сразу становится ясной цель автора</li>
                        <li class="lead"><i class="fas fa-dot-circle"></i>Попробуйте определить «точку входа» — место, которое сразу бросается в глаза. Своеобразный центр картины (хотя «точка» может быть расположена в нижнем или верхнем углу)</li>
                        <li class="lead"><i class="fas fa-dot-circle"></i>Прислушайтесь к собственным эмоциям и сравните их с названием картины. Совпадают ли они? Возможно, автор пытается вызвать жалость или здоровую злость</li>
                        <li class="lead"><i class="fas fa-dot-circle"></i>Изучите пропорции. Иногда художники намеренно искажают реальные пропорции, чтобы изобразить скорость, направление движения объекта</li>
                        <li class="lead"><i class="fas fa-dot-circle"></i>Аллегории — инструмент художника. Расшифровать их можно с помощью специальной справочной литературы. К примеру, цифра 7 — совершенство и завершенность, младенец — символ души, сова — смерть или сон</li>
                        <li class="lead"><i class="fas fa-dot-circle"></i>Палитра — ключ к пониманию эмоционального состояния автора в момент написания картины</li>
                    </ul>

                    <a href="#portfolio" class="btn-down btn-down-white">
                        <i class="fas fa-chevron-down"></i>
                    </a>
                </div>
            </div>
        </section>
        <!-- end of work section -->

        <!-- portfolio section -->
        <section id="portfolio" class="vh-100 py-7">
            <div class="container">
                <div class="portfolio-content">
                    <div class="title">
                        <h2>Работы художников</h2>
                        <a href="#contact" class="btn-down">
                            <i class="fas fa-chevron-down"></i>
                        </a>
                    </div>

                    <div class="portfolio-grid grid">
                        <div><a href = "picture.php"><img src="images/Восход солнца.jpg"></a></div>
                        <div><img src="images/Madonna_Litta.jpg"></div>
                        <div><img src="images/son_vizvanniy.jpeg"></div>
                        <div><img src="images/New_York_lutnist.jpg"></div>
                        <div><img src="images/volny.jpg"></div>
                        <div><img src="images/Nochnaya_terassa.jpg"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of portfolio section -->

        <!-- contact section -->
        <section id="contact" class="py-7">
            <div class="container">
                <div class="contact-content flex">
                    <div class="contact-left">
                        <div class="title">
                            <h2>Свяжитесь с нами</h2>
                        </div>
                        <p class="lead"><i class="fas fa-phone-alt"></i> +375 29 7659234</p>
                        <p class="lead"><i class="fas fa-envelope"></i> portalartist@gmail.com</p>
                        <form action="">
                            <input type="text" class="form-control" placeholder="Ваше имя...">
                            <input type="email" class="form-control" placeholder="Ваша почта...">
                            <input type="submit" class="btn-submit btn" value="Отправить">
                        </form>
                    </div>

                    <div class="contact-right">
                        <img src="images/bichevanieChristaKaravago.jpg" alt="contact image">
                    </div>
                </div>
            </div>
        </section>
        <!-- end of contact section -->

        <!-- instagram section -->
        <section id="insta" class="py-7">
            <div class="container">
                <div class="insta-content">
                    <div class="title">
                        <h2>instagram</h2>
                        <a href="#footer" class="btn-down btn-down-white">
                            <i class="fas fa-chevron-down"></i>
                        </a>
                    </div>
                    <div class="insta-grid grid">
                        <div><img src="images/vinogradniki.jpg"></div>
                        <div><img src="images/Spalnya_v_Arle.jpg"></div>
                        <div><img src="images/Pshenichnoe_pole_Van.jpg"></div>
                        <div><img src="images/van-gog.jpg"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of instagram section -->
    </main>
    <!-- end of main content -->

    <!-- footer -->
    <footer id="footer" class="py-7">
        <div class="container">
            <div class="footer-content">
                <div>
                    <h3>Портал Живописи</h3>
                    <div><img src="images/bichevanieChristaKaravago.jpg"></div>
                </div>

                <div>
                    <h3>Ссылки</h3>
                    <ul class="flex">
                        <li><a href="#about">О портале</a></li>
                        <li><a href="#work">Инструкция</a></li>
                        <li><a href="#portfolio">Работы художников</a></li>
                        <li><a href="#contact">Свяжитесь с нами</a></li>
                        <li><a href="#insta">Instagram</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- end of footer -->


    <!-- typewriting js -->
    <script src="typewriting-master/typewriting.js"></script>
</body>

</html>