<?
class User{
    public $login;
    public $password;
    public $name;
    public $surname;
    public $age;
    public $conn;

    public function __construct()
    {
        $hostname = 'localhost';
        $username = 'root';
        $password = 'root';
        $dbname = 'users';

        $this -> conn = mysqli_connect($hostname, $username, $password, $dbname) or die('Нет соединение');
        mysqli_set_charset($this -> conn, 'utf8');


        
    }

    
    public function login($login, $password){
        $this -> login = $login;
        $this -> password = $password;

        if( (isset($this->login)) && (isset($this -> password)) ){
            $sql = "SELECT * FROM user WHERE login = '{$this -> login}' AND password = '{$this->password}'";
            $res = mysqli_query($this -> conn, $sql);
            $user = mysqli_fetch_all($res, MYSQLI_ASSOC);
            if(count($user) > 0){
                foreach($user as $u){
                
                session_start();
                $_SESSION['name'] = $u['name'];
                $_SESSION['surname'] = $u['surname'];
                $_SESSION['age'] = $u['age'];
                $_SESSION['login'] = $u['login'];
                $_SESSION['password'] = $u['password'];
                header('Location: /');

                }
            }
            else{
                setcookie("message_error", "Вы ввели неправильные данные или данный пользователь не существует", time()+3);
                header('Location: /');
            }
            
        }


    }

    public function register($name, $surname, $age, $login, $password){
        $this -> name = $name;
        $this -> surname = $surname;
        $this -> age = $age;
        $this -> login = $login;
        $this -> password = $password;

        if ( (!empty($this -> name)) && (!empty($this -> surname)) && (!empty($this -> age)) && (!empty($this -> login)) && (!empty($this -> password)) && (strlen($this -> password) > 8) ){
            $register_query = "INSERT INTO user VALUES (NULL, ?, ?, ?, ?, ?)";
            $sql = $this -> conn -> prepare($register_query);
            $sql -> bind_param('sssss', $var1, $var2, $var3, $var4, $var5);
            $var1 = $this -> name;
            $var2 = $this -> surname;
            $var3 = $this -> age;
            $var4 = $this -> login;
            $var5  = md5($this -> password);
            if(!$sql -> execute()){
                $error = mysqli_error($this -> conn);
                $str = 'Duplicate entry';
                $pos = strpos($error, $str);
                if($pos == 0){

                    setcookie('message_error', 'Данный логин уже существует', time()+3);
                    header("Location: /");
                }


            }
            else{
                setcookie('message_success', "Вы успешно зарегестрированы, можете авторизоваться", time()+3);
                header("Location: /");
            }

        }
        else{
            setcookie('message_error', "Вы ввели не все данные или ваш пароль меньше 8 символов", time() + 5);
            header("Location: /");
        }

    }

}