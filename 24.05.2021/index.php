<?
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style2.css">
    <title>Пользователи</title>
</head>
<body>

<? include('header.php')?>

  <? 
  
    if( (isset($_SESSION['name'])) && (isset($_SESSION['surname'])) && (isset($_SESSION['age'])) && ($_SESSION['login'])  ){
    
    ?>
    <div class="modal_form hello">
        <form action="logout.php" method='post'>
            <label for="">Добрый день, <? echo $_SESSION['surname'] . " " . $_SESSION['name'] . "<br>"?></label>
            <label for="">Ваш возраст - <?echo $_SESSION['age'] . "<br>"?></label>
            <label for="">Ваш логин - <?echo $_SESSION['login']?></label>


        </form> 
    </div>

    <?
    }

    else{

        include('forms.php');
    }
  ?> 
</body>
<script src='../js/script.js'></script>
</html>