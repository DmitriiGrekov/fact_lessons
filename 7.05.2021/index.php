<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Урок 10</title>
</head>
<body>
    <?

// Задание 1 
function random_list(&$arr, $n){
    for($i = 0; $i < $n; $i++){
        $arr[] = mt_rand(0, 100);
    }

    return $arr;

};

$arr = [];
echo "<pre>";
print_r(random_list($arr, 10));
echo "</pre>";
echo "<br>";

// Задание 2
$str = "HTML, CSS, PHP, BITRIX";
function words_in_string($str){
    $arr = explode(', ', $str);
    return count($arr);
}

echo "Слов в строке равно = " . words_in_string($str);
echo "<br>";

// Задание 3
function str_reverse($str){
    for($i = mb_strlen($str)-1; $i >= 0; $i--){
        echo $str[$i];
    }
}
str_reverse($str);
echo "<br>";


// Задание 4 
function str_length($str){
    echo "Длина строки равна = " . mb_strlen($str);
}

str_length($str);
echo "<br>";

// Задание 5 
function str_wrap($str){
    for($i = 0; $i < mb_strlen($str); $i++){
        echo $str[$i] . "<br>";
    }
}

str_wrap($str);





?>

<div id="task_1"></div>
<div id="task_2"></div>
<div id="task_3"></div>
<div id="task_4"></div>
<div id="task_5"></div>
</body>
<script src='script/script.js'></script>
</html>