<?
// Логин: admin
// Пароль: 123 
// 
// 
// 
// 
// 

    session_start();

    $username = $_POST['username'];
    $login = 'admin';
    $password = $_POST['password'];
    $pass = '123';
    if( (!empty($username)) && (!empty($password)) ){
        if ( ($username == $login)  && ( $pass == $password ) ){
            $_SESSION['authorization'] = true;
            $_SESSION['username'] = $username;
        }
        else {
            $message = 'Не правильный логин или пароль';
        }
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Задание 2</title>
</head>
<body>

    <?
        if(isset($_SESSION['username']) && ($_SESSION['authorization'] == true)){
    ?>

            <h1>Привет, <? echo $_SESSION['username'];?></h1>

            <nav>

                <a href="logout.php">Выйти</a> 
                <a href="fact.php">Fact</a> 
                <a href="bitrix.php">Bitrix</a>
            </nav>

            <?
                if(isset($_COOKIE['url'])){
                    $last = $_COOKIE['url'];
                    echo "Последняя посещенная страница $last";
                }
            ?>

    <?
        }

        else{
    ?>

    <? if($message){ echo $message;}?>

            <form action="" method='post'>
                <input type="text" name='username' placeholder='Логин'> 
                <br>
                <br>
                <input type="password" name='password' placeholder="Пароль">
                <br>
                <br>
                <input type="submit" value='Авторизоваться'>
            </form>

    <?
        }
    ?>


    
</body>
</html>