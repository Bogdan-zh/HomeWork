<?php 
    $getCart = getCart($products); 
    if($_POST['buy']) {
        buy($products);
    }
    
?>
<?php if(is_array($getCart['products'])): ?>
    <h2 style="width: 100%; text-align: center;">Корзина</h2>
    <form method="post" class="cart">
        <table>
            <tr>
                <td>#</td>
                <td>Название</td>
                <td>Цена за штуку</td>
                <td>Кол-во</td>
                <td>Сумма</td>
            </tr>

            <?php
            $i = 1; 

            foreach ($getCart['products'] as $item):  ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $item->name ?></td>
                <td><?php echo $item->variant->price . " грн" ?></td>
                <td><input type="number" min="0" name="cart_item[<?php echo $item->id ?>]" value="<?php echo $item->cart_amount ?>"></td>
                <td><?php echo $item->variant->price * $item->cart_amount  . " грн" ?></td>
            </tr>
            
        <?php endforeach; ?>
        <tr>
            <td colspan="5" align="right"><?php echo "Общая цена: ".$getCart['total']." грн"; ?></td>
        </tr>
    </table>
    <div class="cart_inputs">
        <input type="submit" name="refresh" value="Обновить">
        <input type="submit" name="buy" value="Купить">
        <input type="submit" name="clear_cart" value="Очистить">
    </div>
</form>

<?php else: ?>
    <div>В корзине нет товаров!</div>
<?php endif; ?>