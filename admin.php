<?php session_start();?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Вход на админ-панель</title>
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
                            <img src="./img/admin.png" alt="logo" />
                        </a>
                    </div>

                    <!-- Номер телефона -->
                    <div class="header__number">

                        <a href="#" class="header__number-tel">
                            <h3>Панель администратора</h3>
                            <?php if(!empty($_SESSION['login'])) : //!empty - проверяем перменную $_SESSION пустая или нет ?>
                            <h1>
                                Ассаламу алейкум
                                <?php echo $_SESSION['login']
                            ?>
                                !<br> Вы в админке.
                                <h1>
                                    <?php else:
                                echo "<h2>Вы не аторизованы</h2>";
                            ?>
                                    <?php endif ?>
                        </a>
                    </div>

                    <!-- Навигация -->
                    <nav class="header__nav">
                        <ul class="header__list">
                            <li class="header__item">
                                <a href="./logout.php" class="header__link">
                                    <?php if(!empty($_SESSION['login'])) : //!empty - проверяем перменную $_SESSION пустая или нет ?>
                                    <a href="./logout.php" class="header__link">Выйти</a>
                                    <?php else: // в остольных случаях ?>
                                    <a href="./login.php" class="header__link">Войти</a>
                                    <?php endif ?>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Фоновое изображение - банер -->

    </header>
    <!-- /* Header end */ -->

    <!-- /* main start */ -->
    <main class="main">


        <section class="wrapper ff">
            <div class="prizes">
                <h2 class="title-h2">Категории </h2>
                <div class="wrapper__prizes">
                    <a href="premium.php" class="ffff" target="_blank">
                        <div class="prizes__name">
                            <div class="prizes__img ">
                                <h2 class="title-h2 fffff">Премии</h2>
                            </div>
                        </div>
                    </a>
                    <a href="writers.php" class="ffff" target="_blank">
                        <div class="prizes__name">
                            <div class="prizes__img ">
                                <h2 class="title-h2 fffff">Писатели</h2>
                            </div>
                        </div>
                    </a>
                    <a href="premium.php" class="ffff" target="_blank">
                        <div class="prizes__name">
                            <div class="prizes__img ">
                                <h2 class="title-h2 fffff">Творчество</h2>
                            </div>
                        </div>
                    </a>
                    <a href="premium.php" class="ffff" target="_blank">
                        <div class="prizes__name">
                            <div class="prizes__img ">
                                <h2 class="title-h2 fffff">Проeкты</h2>
                            </div>
                        </div>
                    </a>
                    <a href="premium.php" class="ffff" target="_blank">
                        <div class="prizes__name">
                            <div class="prizes__img ">
                                <h2 class="title-h2 fffff">Документы</h2>
                            </div>
                        </div>
                    </a>
                    <a href="premium.php" class="ffff" target="_blank">
                        <div class="prizes__name">
                            <div class="prizes__img ">
                                <h2 class="title-h2 fffff">Авторы</h2>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>
    </main>
    <!-- /* main end */ -->

    <!-- footer start -->
    <?php require 'public/footer.php' ?>
</body>

</html>