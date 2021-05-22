<?

include('db.php');

$hobbie = $_POST['hobbie'];

$insert= "INSERT INTO people VALUES (NULL, ?, ?, ?)";
$sql = $conn -> prepare($insert);
$sql -> bind_param('sss', $name, $surname, $age);
$name = $_POST['name'];
$surname = $_POST['surname'];
$age = $_POST['age'];
$sql -> execute();

$sql = "SELECT id_person FROM people WHERE name = '$name' AND surname = '$surname' AND age = '$age' ORDER BY id_person DESC LIMIT 1";
$res = mysqli_query($conn, $sql);
$user_id = mysqli_fetch_all($res, MYSQLI_ASSOC);

$insert_hobbie = "INSERT INTO people_hobbies VALUES (NULL, ?, ?)";
$sql = $conn -> prepare($insert_hobbie);
$sql -> bind_param('ss', $id_people, $id_hobbies);
$id_hobbies = $hobbie;
$id_people = $user_id[0]['id_person'];
if($sql -> execute()){
    setcookie('message', "Пользователь $user добавлен", time()+3);
}

header("Location: /exercise1dop/");