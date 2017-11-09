<h2 style="width: 100%; text-align: center;">Избранные товары</h2>

 
<?php
    $fav_products = getFavorProduct($products);
?>
<?php if(isset($_COOKIE['wishlist'])): ?>
<form method="post" class="clear_wishlist">
    <input type="submit" name="clear_wishlist" value="Очистить список">
</form>
<?php endif; ?>

<?php if (is_array($fav_products['products'])) : ?>
    <?php foreach ($fav_products['products'] as $product): ?> 
        <?php if ($product->visible): ?> 
            <a class="box" href="<?php echo "?route=product&id=$product->id" ?>">
                <img src="http://placekitten.com/200/250">
                <p> <?php echo $product->name ?> </p>
                <div class="st_pr"><p class="price"><?php echo $product->variant->price ?> грн</p>
                <p class="stock">На складе: <?php echo $product->variant->stock ?> штук</p></div>
                <div class="created"><?php echo $product->created ?></div>
            </a>
        <?php endif; ?>
    <?php endforeach; ?>
<?php else :?>
    <p>Нет товаров в избранном</p>
<?php endif ?>




