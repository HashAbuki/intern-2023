<?php require './functions/connect.php';?>
<?php session_start();?>
<?php 
// $mame = '«Золотое перо»- А. Албаков';
// $img = 'img/pero.jpg';
// $text = '«Золотое перо»\r\n25.09.2008\r\n\r\nНа днях в зале Дворца культуры в г.Назрань состоялась церемония награждения молодых писателей, поэтов – победителей ежегодного конкурса «Золотое перо».';
// $date = date("Y-m-d");
// ($bd, "INSERT INTO `premium` (`id`, `name`, `img`, `text`, `date`) VALUES (NULL, $mame , $img , $text, $date)");




$name = $_POST["name"];
$img = $_POST ["img"];
$text = $_POST ["text"];
$date = date("Y-m-d");
$sql = $pdo -> prepare( "INSERT INTO `premium` (`id`, `name`, `img`, `text`, `date`) VALUES (NULL, '$name', '$img', '$text', '$date')");
$sql -> execute(array('name' =>$name, 'img'=>$img, 'text'=>$text, 'date'=>$date ));
if (!$sql) {
    die("Ошибка публикации поста");
} else {
    die('<h1>Пост успешно опубликован.</h1>');
    
}
?>