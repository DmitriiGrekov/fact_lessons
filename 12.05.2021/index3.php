 <?

    $result = 0;

    $arr1 = [3, 9, 10, 13, 14, 19];
    $arr2 = [1, 2, 4, 5, 6, 7, 8, 11, 12, 15, 16, 17, 18];

    for($i = 1; $i < count($_POST) + 1; $i++){

        if($_POST[$i-1] == 'yes' && in_array($i, $arr1)){
            $result += 1;
        }
        else if($_POST[$i-1] == 'no' && in_array($i, $arr2)){
            $result += 1;
        }
        
    }
    echo "$_POST[name] ваш результат:<br>";
    if($result > 15){
        echo strtoupper('У вас покладистый характер<br><br><br>');

    }
    else if( $result >= 8 && $result <=15){
        echo "Вы не лишены недостатков, но с вами можно ладить<br><br><br>";
    }
    else{
        echo 'Вашим друзьяи можно посочувствовать<br><br>';
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
    <title>Задание 3</title>
</head>
<body>

    <a href="index.php">В Меню</a>

    <?
        $questions = [
            'Хотите ли вы всегда проводить свои праздники без взрослых?',
            'Участвуете ли вы в хозяйственных делах вместе с родителями?',
            'Проверяют ли постоянно ваши родители, как вы готовите уроки?',
            'Есть ли у вас и ваших родителей общие занятия, увлечения?',
            'Участвуете ли вы в подготовке семейных праздников?',
            'Хотите ли вы всегда проводить свои праздники без взрослых?',
            'Обсуждаете ли вы с родителями прочитанные книги, газеты?',
            'Бываете ли вы вместе с родителями в кино, театре, музее?',
            'Бываете ли вместе с родителями на прогулках, в походах?',
            'Нравится ли вам проводить вместе с родителями отпуск?',
            'Считаете ли вы. что в вашей семье есть взаимопонимание с родителями?',
            'Говорят ли с вами ваши родители по душам, советуются ли с вами по своим личным делам?',
            'Интересуются ли родители вашей учебой, проблемами по отдельным предметам, проблемами с учителями и одноклассниками?',
            'Интересуются ли они вашей работой?',
            'Есть ли у вас с ними общие занятия и увлечения?',
            'Участвуют ли дети в подготовке к семейным праздникам?'


        ]
    
    ?>

    <form action="" method='POST'>
    <input type="text" name='name' placeholder="Ваше Имя" required>
    <br>
    <br>

    <?
        for($i = 0; $i < count($questions); $i++){

        
    ?>
        <label for=""><?echo $questions[$i];?></label>
        <div>
            Yes<input type="radio" name='<? echo $i;?>' value='yes'>
            No<input type="radio" name='<? echo $i;?>' value='no'>
        </div>

    <?
       } 
    ?>

    <input type="submit" value='Узнать результат'>

          
    </form>


   

    
</body>
</html>