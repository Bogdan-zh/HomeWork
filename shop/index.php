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
        <header>
            <div class="wrap">
                <div class="menu">
                    <?php makeMenu($pages); ?>
                    <?php makeForm($on = true); ?>
                </div>
            </div>
        </header>
        <main>
            <div class="wrap">
                <div class="aside">
                    <h3>Категории</h3>
                    <nav>
                        <?php getCategories($cat); ?>
                    </nav>
                </div>
                <div class="container">
                    <?php include 'html/content.php' ?>
                </div>
            </div>
        </main>
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
