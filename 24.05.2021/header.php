<?
session_start();
if( (isset($_SESSION['name'])) && (isset($_SESSION['surname'])) && (isset($_SESSION['age'])) && ($_SESSION['login'])  ){

?>
  <nav class='header'>
        <a href="#" >Fact-Digital</a>
        <a href="logout.php" class='logout'>Выйти</a>

   </nav>   

<?
}
else {
?>
 <nav class='header'>
        <a href="#" id='register'>Регистрация</a>
        <a href="#" id='authorization'>Авторизация</a>

   </nav>


<?
}
?>