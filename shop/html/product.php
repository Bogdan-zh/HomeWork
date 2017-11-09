<?php $product = getProduct($products, $_GET['id']) ?>


<?php foreach ($products as $product): ?> 
    <?php if ($product->visible && $_GET['id'] == $product->id): ?> 
        <div class="product">
            <h1><?php echo $product->name ?></h1>
            <div class="product1">
                <div>
                <form method="post">
                    <img class="product-image kek" src="http://placekitten.com/200/250">
                    <div class="product-buy kek">
                        <input type="hidden" name="id" value="<?php echo $product->id ?>">
                        Количество: <input type="number" name="amount" value="1" min="1">
                        <input class="button" type="submit" name="cart" value="Купить">
                        <input class="button" type="submit" name="wishlist" value="В избранное">
                        
                    </div>
                </form>
                </div>
                <div class="product-description kek">
                    <p class="product-description_price">Цена товара: <span><?php echo $product->variant->price ?> грн</span></p>
                    <p class="product-description_sku">Артикул товара: <span><?php echo $product->variant->sku ?></span></p>
                    <p class="product-description_description">Описание товара: <span><?php echo $product->description ?></span></p>
                    <p class="product-description_stock">На складе: <span><?php echo $product->variant->stock ?> </span>штук</p>
                </div>
               
            </div>
        </div>
    <?php endif; ?>
<?php endforeach; ?>
<?php 
// echo "<pre>";
// print_r($_SESSION); 
// echo "</pre>";
?>
        
        

