<?php session_start();?>
<!--!empty - проверяем перменную $_SESSION пустая или нет -->
<?php if(!empty($_SESSION['login'])) : ?>
<!-- то переходим на главную -->
<?php return header("location:/");?>
<?php endif ?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Вход в админ-панель</title>
    <link rel="stylesheet" href="./styles/style.css" />
    <link rel="stylesheet" href="./styles/reset.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="./js/index.js" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600&display=swap" rel="stylesheet" />
</head>


<body>
    <!-- /* Header start */ -->
    <header>
        <div class="header__background">
            <div class="wrapper">
                <div class="header__wrapper">
                    <div class="header__logo">
                        <a class="header-logo-link" href="/">
                            <img src="./img/Logo.svg" alt="logo" />
                        </a>
                    </div>

                    <!-- Номер телефона -->
                    <div class="header__number">
                        <img src="./img/Vector.svg" alt="telephone" />
                        <a href="tel:+79064888774" class="header__number-tel">+7 (906) 488 87-74</a>
                    </div>

                    <!-- Навигация -->
                    <nav class="header__nav">
                        <ul class="header__list">
                            <li class="header__item">
                                <!--                                <a href="./index.html" class="header__link">Войти</a>-->
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Фоновое изображение - банер -->
        <div class="">
            <div class="wrapper">
                <div class="banner__wrapper">
                    <div class="header__title">
                        <h1 class="main__header-h1" style="color: black; margin-bottom: 50px;">Вход в
                            административную
                            панель</h1>
                        <p class="main__header-p">
                            Amet minim mollit non deserunt ullamco est sit aliqua dolor do
                            amet sint. Velit officia consequat duis enim velit mollit.
                            Exercitation veniam consequat sunt nostrud amet.
                        </p>
                        <form action="admin/admin.php" method="post" class="">
                            <div class="footer__namber">
                                <input type="text" placeholder="Введите логин" name="login">
                                <input type="text" placeholder="Введите пароль" name="password">
                            </div>
                            <div>
                                <button type="submit" class="">Войти</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- /* Header end */ -->

    <!-- /* main start */ -->
    <main class="main">
        <section>

        </section>
    </main>
    <!-- /* main end */ -->

    <!-- footer start -->
    <?php require 'public/footer.php' ?>
    <!-- footer end -->

</body>

</html>