<?php require_once '../functions/connect.php';?>
<?php session_start();?>
<?php
$password = $_POST["password"];
$login = $_POST ["login"];
$sql = $pdo -> prepare("SELECT * FROM user WHERE login=:login AND password=:password"); // Создаю запрос
$sql -> execute(array('login' =>$login, 'password'=>$password)); // Исполняю запрос
$array = $sql -> fetch(PDO::FETCH_ASSOC); // превращаю запрос в массив

// echo"<pre>";
// var_dump($array);
// echo"<pre>";

if($array["id"]>0){
   $_SESSION['login'] = $array["login"];
   header('Location:../admin.php');
}else{
   header('Location:../login.php');
}