<?
    if(isset($_POST['color'])){
        $color = $_POST['color'];
        setcookie('color', $color, time() + 3600 * 24 * 7);
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 3</title>
</head>
<?
    if ((isset($_COOKIE['color'])) && (empty($_POST['color'])) ){



?>
<body style='background-color: <? echo $_COOKIE['color'];?>'>
<?
    }
    else{ 

    
?>

<body style='background-color: <? echo $color;?>'>

<?
    }
?>

    <form action="" method='post'>
    
        <select name="color" id="">
            <option value="green">Зеленый</option> 
            <option value="blue">Голубой</option>
            <option value="red">Красный</option>
        </select> 
        <input type="submit" value='Применить'>
    </form>
    
</body>
</html>