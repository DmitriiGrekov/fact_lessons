<?
include('db.php');

$sql = 'SELECT * FROM hobbies';
$res= mysqli_query($conn, $sql);
$hobbies = mysqli_fetch_all($res, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>

<div class='container'>
    <?
        if($_COOKIE['message']){
    ?>

    <div class="message">
            <? echo $_COOKIE['message']?>
    </div>
    <?
        }
    ?>
<form action="added.php" method='post'>
    <label for="name">Имя</label><br><input type="text" id='name' name='name' placeholder="Имя">
<br>
    <label for="surname">Фамилия</label><br><input type="text" id='surname' name='surname' placeholder="Фамилия">
    <br>

    <label for="age">Возраст</label><br><input type="text" id='age' name='age' placeholder="Возраст">
    <br>
    <label for="hobbie">Хобби</label><br>

    <select name="hobbie" id="hobbie">
    <?
        foreach($hobbies as $hobbie){
    ?>
    
            <option value="<? echo $hobbie['id_hobbies']?>"><? echo $hobbie['name']?></option>
    <?
        }
    ?>

    </select>
    <br>
    <input type="submit" value='Отправить'>

    

</form>
    
</div>

</body>
</html>