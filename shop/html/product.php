<?php $product = getProduct($products, $_GET['id']) ?>


<?php foreach ($products as $product): ?> 
    <?php if ($product->visible && $_GET['id'] == $product->id): ?> 
        <div class="product">
            <h1><?php echo $product->name ?></h1>
            <div class="product1">
                <div>
                    <img class="product-image kek" src="http://placekitten.com/200/250">
                    <div class="product-buy kek">
                        Количество: <input type="number" name="amount" value="1">
                        <button>Купить</button>
                    </div>
                </div>
                <div class="product-description kek">
                    <!-- <p class="product-description_name">Название товара: <span><?php //echo $product->name ?></span></p> -->
                    <p class="product-description_price">Цена товара: <span><?php echo $product->variant->price ?> грн</span></p>
                    <p class="product-description_sku">Артикул товара: <span><?php echo $product->variant->sku ?></span></p>
                    <p class="product-description_description">Описание товара: <span><?php echo $product->description ?></span></p>
                    <p class="product-description_stock">На складе: <span><?php echo $product->variant->stock ?> </span>штук</p>
                </div>

            </div>
        </div>
    <?php endif; ?>
<?php endforeach; ?>

        
        

