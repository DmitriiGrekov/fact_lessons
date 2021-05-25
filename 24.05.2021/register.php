<?
include('User.php');
$new_user = new User();
$new_user -> register($_POST['name'], $_POST['surname'], $_POST['age'], $_POST['login'], $_POST['password']);