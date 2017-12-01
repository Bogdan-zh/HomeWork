<?php 
header('Content-Type: text/html; charset=utf-8');
require_once "functions.php";
$link = connect("localhost", "root", "", "myBD");

if(!empty($_POST['email']) && !empty($_POST['pass'])) {

    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $query = "SELECT id, name, email, pass FROM users WHERE email='$email' LIMIT 1";
    

    if($r = query($link, $query)) {
        $result = result($r);
        if(password_verify($pass, $result['pass'])) {
            echo 'Вы авторизовались '. $result['name']."<br>";
            echo "Ваш email: ".$result['email']."<br>";
            $_SESSION['user_id'] = $result['id'];
        } else {
            echo "Что-то пошло не так";
        }
    }
}


endconnect($link);

?>

<a href="/lesson11">Главная</a>
<a href="registration.php">Регистрация</a>
<a href="login.php">Логин</a>

<h1>Логин</h1>
<form method="post">
    <input type="email" name="email" placeholder="email"><br>
    <input type="password" name="pass" placeholder="pass"><br>
    <input type="submit" name="login">
</form>