<?php include 'html/headers.php'; ?>
<?php require_once 'functions/functions.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Магазин</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

    <div class="qwerty">
        <div class="top-menu">
            <div class="top-menu_wrap">
                <a href="?route=registration">Регистрация</a>/
                <a href="?route=login">Вход</a>
            </div>
        </div>
        <header>
            <div class="wrap">
                <div class="menu">
                    <?php makeMenu($pages); ?>
                    <div class="isForm">
                        <a href="?route=links">Преобразователь ссылок</a>
                        <a href="?route=wishlist">Избранное (<?php wishlist_count(); ?>)</a>
                        <a href="?route=cart">Корзина (<?php cart_count(); ?>) </a>
                    </div>
                </div>

            </div>
        </header>
            
        <main>
            <div class="wrap">
                <div class="aside">
                    <h3>Категории</h3>
                    <nav>
                        <?php $cat = GetCategoriesTree($categories); getCategories($cat); ?>
                    </nav>
                </div>
                <div class="container">
                    <?php include 'html/content.php' ?>
                </div>
            </div>
        </main>
        <div style="text-align: center; margin: 10px;">
                <?php 
                if(isset($_COOKIE['last_visited'])) {
                    echo $last_vis_echo."<br>"; 
                }
                echo $last_time."<br>"; 
                ?>
            </div>
        <footer>
            <div class="wrap">
                <div class="menu">
                    <?php makeMenu($pages); ?>
                </div>
            </div>
        </footer>
        
    </div>

</body>


<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</html>
