<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Урок 6</title>
</head>
<body>

<?php
    $name = "Дмитрий";
    $age = 21;
    const p = 3.1415926535898;
    $server_date = date("H.i.s");
    $server_time = (int)date("H");

?>


<section class="content">
    <h3>Имя: <? echo $name?></h3>
    <h3>Возраст: <? echo $age?></h3>
    <h3>Константа PI: <?echo p?></h3>
    <h3>Время на сервере: <?echo $server_date?></h3>
    <?
        if($server_time>=8 && $server_time < 20){
    ?>
        <img src="img/sun.png" alt="" height="100">
    <?
        }
        else if( ($server_time>=20 && $server_time <= 24 ) || $server_time < 8){
    ?>
        <img src="img/luna.png" alt="" height="100">
    <?
        } 
    ?>
</section>
    
</body>
</html>