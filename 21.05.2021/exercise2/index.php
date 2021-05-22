<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style2.css">
    <title>Пользователи</title>
</head>
<body>

   <nav class='header'>
        <a href="#" id='register'>Регистрация</a>
        <a href="#" id='authorization'>Авторизация</a>
   </nav> 

    
    <div class="modal_form registr">
<?
        if($_COOKIE['message_error']){
    ?>
        <p class='error'>
            <? echo $_COOKIE['message_error']?>
        </p>
        <br>
    <?
            
        }
    ?>
    <br>
        <form action="register.php" method='post'>
            <label for="name">Имя</label><br><br><input type="text" id='name' name='name' placeholder="Имя" required><br>
            <label for="surname">Фамилия</label><br><br><input type="text" id='surname' name='surname' placeholder="Фамилия" required><br>
            <label for="age">Возраст</label><br><br><input type="text" id='age' name='age' placeholder="Возраст" required><br>
            <label for="login">Логин</label><br><br><input type="text" id='login' name='login' placeholder="Логин" required><br>
            <label for="password">Пароль</label><br><br><input type="password" id='password' name='password' placeholder="password" required><br>
            <input type="submit" value='Зарегестрироваться'>

        </form> 
    </div>

    <div class="modal_form auth">
<?
        if($_COOKIE['message_error']){
    ?>
    <p class='error'>
            <? echo $_COOKIE['message_error']?>
    </p>
           
        <br>
    <?
            
        }
    ?>
  <? if($_COOKIE['message_success']){
    ?>
    <p class='success'>
            <? echo $_COOKIE['message_success']?>
    </p>
           
        <br>
    <?
            
        }
    ?>


        <form action="auth.php" method='post'>
            <label for="login">Логин</label><br><br><input type="text" id='login' name='login' placeholder="Логин"><br>
            <label for="password">Пароль</label><br><br><input type="password" id='password' name='password' placeholder="password"><br>
            <input type="submit" value='Войти'>

        </form> 
    </div>
</body>
<script src='../js/script.js'></script>
</html>