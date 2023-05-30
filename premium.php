<?php session_start();
if(!empty($_SESSION['login'])){
   
 }else{
    header('Location:../login.php');
 }?>



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
                        <a class="header-logo-link" href="/admin.php">
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
        <div class="">
            <div class="wrapper">
                <div class="banner__wrapper">
                    <div class="header__title ">
                        <h1 class="main__header-h1 " style="color: black; margin-bottom: 50px;">Премии и награды</h1>

                        <table class="table">
                            <?php 

                                echo '
                                            <tr>
                                                <th>ID</th>
                                                <th>Название</th>
                                                <th>Фото</th>
                                                <th>Описание</th>
                                                <th>Дата</th>
                                                
                                            </tr>';
                        
                            require './functions/connect.php';
                            $query = $pdo -> query('SELECT * FROM `premium`');
                            while($row = $query -> fetch(PDO::FETCH_OBJ)){
                                // echo '<li><b>' . $row->name . $row-> img . $row->date . '</b></i>';
                                echo '
                                <tr>
                                    <td><span>' . $row->id . '</span></td>
                                    <td><span>' . substr($row->name, 0, 70) . '</span></td>
                                    <td>' . $row-> img . '</td>
                                    <td>' . substr($row->text, 0, 100) . '...</td>
                                    <td>' . $row->date . '</td>
                                    
                                <tr>';                      
                            }
                        
                            ?>
                        </table>

                        <form class="form" action="/run.php" method="post" class="">
                            <div class="footer__namber">
                                <p>Название премии</p>
                                <input type="text" placeholder="name" name="name">
                                <br> <br>
                                <p>Изображению</p>
                                <input type="text" placeholder="img" name="img">
                            </div>
                            <div>
                                <p>Описание</p>
                                <textarea name="text" cols="100" rows="10"></textarea>
                                <!-- <br>
                                <br>
                                <input type="data" placeholder="Введите дату" name="data"> -->
                            </div>
                            <br>
                            <br>
                            <div>
                                <button type="submit" class="">Сохранить</button>
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
            <div class="wrapper">
                <div class="">



                    <?php
                        // require './functions/connect.php';
                        // $sql = $pdo -> prepare("SELECT * FROM `premium`");
                        // $sql -> execute(array('name' =>$name, 'img'=>$img, 'text'=>$text, 'date'=>$date ));
                        // echo '<pre>';
                        // // var_dump();
                        // echo '</pre>';
                        ?>






                </div>
            </div>
        </section>
    </main>
    <!-- /* main end */ -->

    <!-- footer start -->
    <?php require 'public/footer.php' ?>
    <!-- footer end -->

</body>

</html>