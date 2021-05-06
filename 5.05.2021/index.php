<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Занятие 9</title>
</head>
<body>

<form action="" method="POST">
    <input type="text" placeholder="Введите строку" name='text'>
    <input type="submit" value='Обрезать'>
</form>

<?

    // Задание 1
    $str = $_POST['text'];
    if(mb_strlen($str) > 5){
        $str = mb_substr($str, 0, 5) . "....";
        echo $str;
    }
    else{
        echo $str;
    }

    echo "<br>";

    // Задание 2 

    $str = $_POST['text'];
    for($i = 0; $i<mb_strlen($str);$i++){
        switch(strtolower($str[$i])){
            case "a":
                $str[$i] = '1';
                break;
            case "b":
                $str[$i] = '2';
                break;
            case "c": 
                $str[$i] = '3';
                break;
            
        }
    }
    echo $str;
    echo "<br>";

    // Задание 3
    $str = "abc abc abc";
    $pos = null;
    for($i = 0; $i < mb_strlen($str); $i++){
        if($str[$i] == 'b'){
            if($i > $pos){
                $pos = $i;
            }
        }
    }
    echo $pos;
    echo "<br>";

    // Задание 4
    $str = 'html css php';
    $arr = explode(" ", $str);
    print_r($arr);




?>

<form action="/index.php" method="post">
    <input type="date" name="date1" />
    <input type="date" name="date2" />
    <input type="submit" name="otv" />
</form>
<?
// Задание 5
    if (isset($_POST['date1']) && isset($_POST['date2']) ) {
        $date1 = date_create($_POST['date1']);
        $date2 = date_create($_POST['date2']);
        $result = date_diff($date1, $date2);
        echo "Количество дней : " . $result->days;}
?>

<hr>
<br>
<h3>Выполнение задания нa js</h3>
<div id="task_1"></div>
<div id="task_2"></div>
<div id="task_3"></div>
<div id="task_4"></div>

<input type="date" name="date1" id='date_1' />
<input type="date" name="date2" id='date_2' />
<input type="button" name="otv" id='button' value='Отправить'/>

<div id="task_5"></div>

    <script src='script/script.js'></script>
</body>
</html>