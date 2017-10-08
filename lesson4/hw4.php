<!-- ЗАДАЧА №1 -->
<style>
    table {
        float: left;
        margin-right: 30px;
        text-align: center;
    }
    table, td {
        border: 2px solid black;
        border-collapse: collapse;
        padding: 5px;
    }
    td {
        width: 30px;
        height: 30px;
    }

    * {
        box-sizing: border-box;
    }
    body {
        font-family: Tahoma;
    }
    header {
        background-color: #D9EDF7;
    }
    main {
        margin-top: 40px;
        margin-bottom: 100px;
    }
    .wrap {
        margin: 0 auto;
        max-width: 1160px;
        display: flex;
    }
    .menu a {
        display: inline-block;
        padding: 15px; 
        color: #2F7DBA; 
        text-decoration: none;
    }
    .aside {
        padding: 20px;
        border: 1px solid #E4E5E5;
        border-radius: 3px;
        min-width: 300px;
        align-self: flex-start;
    }
    .aside h3 {
        background-color: #C9E7FC;
        line-height: 50px;
        margin: 0;
        text-align: center;
    }
    .aside ul li a {
        color: #2F7DBA; 
        text-decoration: none;
    }

    .container {
        border: 1px solid #E4E5E5;
        border-radius: 3px;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }
    .container h2 {
        width: 100%;
        margin: 40px;

    }
    .box {
        border: 1px solid black;
        padding: 20px 25px;
        display: flex;
        position: relative;
        flex-direction: column;
        align-items: center;
        justify-content: space-between;
        text-align: center;
        flex-basis: 200px;
        margin: 0 10px 30px;
    }
    .box > a {
        color: #7DC0FF; 
        margin: 10px 0;
    }

    .stock{
        margin-top: auto;
        margin-bottom: 0;
    }
    .price {
        font-size: 18px;
        font-weight: bold;
        margin: 5px 0;
    }
    .created {
        position: absolute;
        top: 0;
        right: 0;
    }
</style>


<?php 

include 'functions.php';
include 'data_pages.php';
include 'data_categories.php';
include 'data_products.php';


echo "ЗАДАЧА №1 <br><br>";


function drawTable($row, $col, $color) {
 echo '<table>';
    for ($i=1; $i <= $row; $i++) {
        echo '<tr>';
            for ($j=1; $j <= $col; $j++) {
                echo "<td style=\" background-color: $color\">" . $j * $i . "</td>";
            }
        echo '</tr>';
    }
echo '</table>';
}
drawTable(10, 10, '#3AE2CE');
drawTable(7, 7, '#FFDD00');
drawTable(5, 5, '#D0FF00');




echo "<div style=\"clear: both;\"></div>";
echo "<hr>";



// ЗАДАЧА №2
echo "ЗАДАЧА №2 <br>";


// include файла с этой функцией вначале, именно такая же функция там и находится, эта тут для демонстрации

// function MainMenu($pages, $type = true) {
//  if(is_array($pages)) {
//      foreach ($pages as $page){ 
//          if(($page->visible) && ($page->menu_id == 1)) {
//              if ($type) {
//                  echo ('<a href=' . $page->url . '>' . $page->name . '</a><br>');
//              } else {
//                  echo ('<a href=' . $page->url . '>' . $page->name . '</a>' . " ");
//              }
//          }
//      }
//  }
// }

MainMenu($pages);
MainMenu($pages, false);
echo "<hr>";




//ЗАДАЧА №3
echo "ЗАДАЧА №3<br>";

echo "<pre>";
print_r(GetCategoriesTree($categories1));
echo "</pre>";
echo "<hr>";




// ЗАДАЧА №4
echo "ЗАДАЧА №4<br>";
 ?>
 
<div class="qwerty">
    <header>
        <div class="wrap">
            <div class="menu">
                <?php MainMenu($pages, false); ?>
            </div>
        </div>
    </header>
    <main>
        <div class="wrap">
            <div class="aside">
                <h3>Категории</h3>
                <nav>
                    <?php getCategories(GetCategoriesTree($categories)); ?>
                </nav>
            </div>
            <div class="container">
                <h2>Детские товары</h2>
                
                <?php foreach ($products as $product): ?> 
                    <?php if ($product->visible): ?> 
                        <div class="box">
                            <img src="http://placekitten.com/200/250">
                            <a href="<?php echo $product->url?>"><?php echo $product->name ?></a>
                            <div class="st_pr"><p class="price"><?php echo $product->variant->price ?> грн</p>
                            <p class="stock">На складе: <?php echo $product->variant->stock ?> штук</p></div>
                            <div class="created"><?php echo $product->created ?></div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>

            </div>
        </div>
    </main>
</div>

