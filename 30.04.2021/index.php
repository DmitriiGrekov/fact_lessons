<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Занятие 8</title>
    <script src='js/script.js'>
    </script>
</head>
<body>

    <form action="" method='POST'>
        <input type="text" name='n' placeholder="Введите колличество элементов в массиве"> 
        <input type="submit" value='Сгенерировать'>
    </form>

<?
    // Задание 1
    $n = $_POST['n'];
    $arr = [];
    for($i=0; $i<$n; $i++){
        $arr[] = mt_rand(0, 100);

    }

    echo "<br>";
    echo "Все четные элементы выделены жирным";
    echo "<br>";
    foreach($arr as $value){
        if($value%2 == 0){
            echo "<b>$value</b> ";
            continue;
        }
        echo "$value ";
    }

    echo "<br>";

    // Задание 3
    $nums = array(
        1 => array(5, 10, 12, 34, 54, 34),
        2 => array(32, 44, 1, 23, 89, 7, 12, 32),
        3 => array(32, 43, 3)
    );

    $i = 0;
    foreach($nums as $key => $value){
        foreach($nums[$key] as $val){
            $i += 1;
        }

        $lenght = count($value);
        echo "Колличество элементов под $key ключом равно = $lenght <br>";
    }

    
    echo "Общее колличество элементов равно = $i";

?>

<br>
<br>
    <input id='generate' type="button" value='Сгенерировать числа с помощь js'>
<div id="container">
</div>

<br>
<div id="task_2"></div>

<div id="task_3"></div>
    
    
</body>
</html>