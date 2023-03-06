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
    <section id = "about" class = "about py-7">
            <div class = "container">
                <div class = "about-content grid">
                    <div class = "about-left">
                        <img src = "./images/masl_glav.jpg" alt = "">
                    </div>
                    <div class = "about-right">
                        <div class = "title">
                            <h2>Описание техники</h2>
                        </div>
                        <?php
                        if ($result = $connect->query("SELECT technique.technique_title, technique.description FROM technique where technique.id_t= 11"))
                        $var = $result->fetch_object();
                        $result->close();
                        ?>
                        <p class = "lead">Название:<?php echo $var->technique_title?></p>
                        <p class = "lead"><?php echo $var->description?></p>
                        <a href = "#work" class = "btn-down">
                            <i class = "fas fa-chevron-down"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
</main>
</body>
</html>
