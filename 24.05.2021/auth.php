<?
    include('User.php');
    $user = new User();
    $user -> login($_POST['login'], md5($_POST['password']));

?>