<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Задание 1</title>
</head>
<body>

    <a href="index.php">В Меню</a>

<form action="" method='POST'>
<p>
    <input type="text" placeholder="Логин" name='login' required>
</p>

<p>
<textarea name="comment" cols="30" rows="10" placeholder="Комментарий" required></textarea>
</p>

    <input type="submit" value='Отправить'>
</form>


<?

    $login = $_POST['login'];
    $comment = $_POST['comment'];
    $message = "Логин = $login; Комментарий: $comment";
    mail("grekovdima7@gmail.com", "Комментарий от пользователя $login" ,$message);

?>
    
</body>
</html>