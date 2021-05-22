<?

$hostname = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'peoples';

$conn = mysqli_connect($hostname, $username, $password, $dbname) or die('Нет соединениея');
mysqli_set_charset($conn, 'utf8');