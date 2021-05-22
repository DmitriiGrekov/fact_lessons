<?
include('db.php');

$name = $_POST['name'];
$surname = $_POST['surname'];
$age = $_POST['age'];
$login = $_POST['login'];
$password =$_POST['password'];


if ( (!empty($name)) && (!empty($surname)) && (!empty($age)) && (!empty($login)) && (!empty($password)) && (strlen($password) > 8) ){
}
else{
    setcookie('message_error', "Вы ввели не все данные или ваш пароль меньше 8 символов", time() + 5);
    header("Location: /exercise2/");
}

$register_query = "INSERT INTO user VALUES (NULL, ?, ?, ?, ?, ?)";
$sql = $conn -> prepare($register_query);
$sql -> bind_param('sssss', $var1, $var2, $var3, $var4, $var5);
$var1 = $name;
$var2 = $surname;
$var3 = $age;
$var4 = $login;
$var5  = md5($password . 'asdhfjk');


if(!$sql -> execute()){
    $error = mysqli_error($conn);
    $str = 'Duplicate entry';
    $pos = strpos($error, $str);
    if($pos == 0){

        setcookie('message_error', 'Данный логин уже существует', time()+3);
        header("Location: /exercise2/");
    }


}
else{
    setcookie('message_success', "Вы успешно зарегестрированы, можете авторизоваться", time()+3);
    header("Location: /exercise2/");
}
