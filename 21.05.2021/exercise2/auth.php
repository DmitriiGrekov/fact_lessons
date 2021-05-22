<?
include('db.php');
$login = $_POST['login'];
$password = md5($_POST['password'] . 'asdhfjk');

$sql = "SELECT * FROM user WHERE login = '$login' AND password = '$password'";
$res= mysqli_query($conn, $sql);
$user = mysqli_fetch_all($res);
if(count($user) > 0){
    header('Location: https://fact.digital/');
}
else{
    setcookie("message_error", "Вы ввели неправильные данные или данный пользователь не существует", time()+3);
    header('Location: /exercise2/');
}