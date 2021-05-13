<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Задание 2</title>
</head>
<body>

    <a href="index.php">В Меню</a>

<form action="" method='POST'>
    <p>
        <input type="text" name='login' placeholder='Логин' required> 
    </p>
    <p>
    <input type="password" name='password' placeholder="Пароль" required>
    </p>
    <input type="submit" value='Авторизоваться'>
</form>


   <?

    $users = [
        '78b05eeef3ed3e78a738ea0143376c67' => '45efdd28185273a843261062ae8c00b2'
    ];
    $login = md5($_POST['login'] . "qwerty") ; //Логин: admin
    $password = md5($_POST['password'] . 'qwerty'); //Пароль: password

    if($users[$login] == $password){
        echo 'Вы успешно авторизованы';
    }
    else{
        echo 'Пароли не совпадают';
    }


   ?> 
</body>
</html>