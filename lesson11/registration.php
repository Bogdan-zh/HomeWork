<?php 
header('Content-Type: text/html; charset=utf-8');
require_once "functions.php";
$link = connect("localhost", "root", "", "myBD");

if(isset($_POST['reg'])) {
    $name = trim(strip_tags($_POST['name']));
    $email = trim(strip_tags($_POST['email']));
    $pass = trim(strip_tags($_POST['pass']));
    $pass_hash = password_hash($pass, PASSWORD_DEFAULT);

    $query = "INSERT INTO users(name, email, pass) VALUES (\"$name\", \"$email\", \"$pass_hash\")"; 
}

?>
<a href="/lesson11">Главная</a>
<a href="registration.php">Регистрация</a>
<a href="login.php">Логин</a>


<h1>Регистрация</h1>
<form method="post">
    <input type="text" name="name" placeholder="имя" required="1"><br>
    <input type="email" name="email" placeholder="email" required><br>
    <input type="password" name="pass" placeholder="pass" required><br>
    <input type="submit" name="reg">
</form>

<?php 
if(query($link, $query)) {
    echo "Спасибо за регистрацию!";
}
endconnect($link);
?>