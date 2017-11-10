<?php 


if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['send_url'])) {
    $url = trim(strtolower(translit($_POST['url'])));
    $link_res = preg_replace('/(^[\s\-|\/]+)|([\s\-|\/]+$)/u', '', $url);
}

 ?>
 <h2>Преобразователь ссылок</h2>
 <div class="product_links">
    <form method="post">
        <input class="reg" type="text" name="url" placeholder="Введите ссылку"><br>
        <input type="submit" name="send_url" value="Преобразовать">

        <?php if (!empty($_POST['url'])): ?>
            <div style="margin: 20px auto 0;">Результат: <?php echo $link_res; ?></div>
        <?php elseif(isset($_POST['send_url']) && empty($_POST['url'])): ?>
            <div style="margin: 20px auto 0;">Вы не ввели ссылку</div>
        <?php endif; ?>
    </form>
    
 </div>

