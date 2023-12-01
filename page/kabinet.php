<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Термоснаб - Личный Кабинет</title>
    <!-- иконка -->
    <link rel="shortcut icon" href="./img/logotype.png" type="image/x-icon">
    <!-- стили -->
    <link rel="stylesheet" href="../style/main.css">
</head>
<body>
    <!-- header -->
    <?php
        session_start();
        require('../php/header-page.php')
    ?>

    <div class="content">
        <div class="bottomInfoHead">
            <p>Вы здесь: => Главная страница</p>
            <p>Корзина</p>
        </div>

        <!-- кабинет -->
        <h1>Здравствуйте, 
            <?php
                if(isset($_SESSION ['name'])) {
                    echo $_SESSION ['name'];
                } else {
                    echo "Незнакомец";
                }
            ?>
        </h1>
        <!-- кнопка выхода с профиля -->
        <?php
            if(isset($_SESSION ['name'])) {
                echo "<div class='exit'>
                <a class='show' href='../php/exit.php'>Выйти</a>
                </div>";
            }
        ?>



    </div>

    <!-- footer -->
    <?php
        require('../php/footer-page.php');
    ?>
    
    <!-- шрифты -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500&family=Comfortaa&family=Play:wght@700&display=swap" rel="stylesheet">
    
    <!-- slider -->
    <script src="./script/slider.js"></script>


</body>
</html>