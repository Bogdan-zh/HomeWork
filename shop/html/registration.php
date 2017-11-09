<?php 

if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['send'])) {
    $id = rand(100, 10000);
    $login = strip_tags(trim($_POST['login']));
    $name = strip_tags(trim($_POST['name']));
    $email = strip_tags(trim($_POST['email']));
    $password = strip_tags(trim($_POST['password']));
    $re_password = strip_tags(trim($_POST['re_password']));

    if(!preg_match('/^[a-z]{4,}+$/i', $login)) {
        $msg1 = "Введите корректно логин";
    } elseif(!preg_match('/^[а-я\-?]+$/ui', $name)) {
        $msg2 = "Введите корректно имя";
    } elseif(!preg_match('/(^[a-z0-9\.?\-?]+)@([a-z0-9\.?\-?]+)\.([a-z]+)$/i', $email)) {
        $msg3 = "Введите email";
    } elseif(!preg_match('/^[a-z0-9\-?\/?\*?\??]{4,}$/i', $password)) {
        $msg4 = "Введите пароль";
    } else {
        //$password_h = password_hash($password, PASSWORD_DEFAULT);
        //file_put_contents('users.txt', "$id $login $name $email $password_h\n", FILE_APPEND);
        $login = '';
        $name = '';
        $email = '';
        $msg = "<p>Регистрация успешно пройдена!</p>";
    }
}

 ?>

<div class="registration">
    <form method="post">
        <h2>Регистрация</h2>
        <input class="reg loginn" type="text" name="login" placeholder="Логин" required pattern="[a-zA-Z]{4,255}" value="<?php echo $login; ?>"><br>
        <?php echo $msg1; ?>
        <input class="reg namee" type="text" name="name" placeholder="Имя" required pattern="[а-яА-Я\-?]{2,255}" value="<?php echo $name; ?>"><br>
        <?php echo $msg2; ?>
        <input class="reg emaill" type="email" name="email" placeholder="Email" required pattern="([A-z0-9_.-]{1,})@([A-z0-9_.-]{1,}).([A-z]{2,8})" value="<?php echo $email; ?>"><br>
        <?php echo $msg3; ?>
        <input class="reg passwordd" type="password" name="password" placeholder="Пароль" required pattern="[a-zA-Z0-9-/*?]{4,}"><br>
        <?php echo $msg4; ?>

        <input type="submit" name="send" value="Зарегистрироваться">
        <?php echo $msg; ?>
    </form>
</div>
 