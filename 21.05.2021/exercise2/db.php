<?
$hostname = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'users';

$conn = mysqli_connect($hostname, $username, $password, $dbname) or die('Нет соединение');
mysqli_set_charset($conn, 'utf8');
