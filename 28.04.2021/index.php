<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Занятие 7</title>
</head>
<body>
    <?

    // Задание 1
    echo "<br><b>Задание 1</b><br>";
    for($i = 5; $i<=13; $i++){
        echo "$i <br>";
    }

    echo "<br><b>Задание 2</b><br>";
    // Задание 2

    echo "<br> Решение через цикл <b>while</b><br>";
    $num = 1000;
    $iter = 0;
    while($num>50){
        $num /= 2;
        $iter += 1;
        echo "$num <br>";
    }
    echo "<br>Число меньше 50 = $num <br>";
    echo "Колличество итераций $iter <br>";
    echo "<br> Решение через цикл <b>for</b><br>";

    $num = 1000;
    for($i=1;;$i++){
        $num /= 2;
        echo "$num <br>";
        if($num<50){
            echo "Результат деления меньше 50 = $num<br>";
            echo "Коллическов итерация равно $i";
            break;
        }

    }

    // Задание 3
    echo "<br><br><b>Задание 3</b><br>";
    $num = $_POST['num'];
    if($numi<0 || $num>10){
        echo "Число меньше 0 или больше 10";
    }
    else{
        for($i = 0; $i <= 10-$num; $i++){
            echo "$i ";
        }

    }
    
?>

<form action="" method='POST'>
    <br>
    <input type="text" placeholder="Введите число от 0 до 10" name='num'>
    <br>
    <input type="submit" value='Выполнить'>
</form>






</body>
</html>