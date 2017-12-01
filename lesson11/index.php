<?php 
header('Content-Type: text/html; charset=utf-8');
require_once "functions.php";


$link = connect("localhost", "root", "", "myBD");

$query = "SELECT id, name, email FROM users";
$r = query($link, $query);
$result = results($r);

endconnect($link);
?>

<a href="">Главная</a>
<a href="registration.php">Регистрация</a>
<a href="login.php">Логин</a>

<style>
table, td {
    border: 1px solid black;
    border-collapse: collapse;
    padding: 5px 10px;
}
</style>
<?php if(isset($result) && is_array($result) && count($result) > 0): ?>
    <h1>Пользователи</h1>
    <table>
        <tr>
            <td>id</td>
            <td>name</td>
            <td>email</td>
        </tr>

        <?php foreach($result as $res): ?>
            <tr>
                <td><?php echo $res['id'] ?></td>
                <td><?php echo $res['name'] ?></td>
                <td><?php echo $res['email'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>
<?php 

?>