<?php $order = getOrder($products); ?>

<h2 style="width: 100%; text-align: center;">Ваш заказ оформлен!</h2>

<?php if(is_array($order['products'])): ?>
    
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

            foreach ($order['products'] as $item):  ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $item->name ?></td>
                <td><?php echo $item->variant->price . " грн" ?></td>
                <td><?php echo $item->cart_amount . " шт." ?></td>
                <td><?php echo $item->variant->price * $item->cart_amount  . " грн" ?></td>
            </tr>
            
        <?php endforeach; ?>
        <tr>
            <td colspan="5" align="right"><?php echo "Общая цена: ".$getCart['total']." грн"; ?></td>
        </tr>
    </table>

<?php endif; ?>

<?php 

//echo "<pre>";
// $qwe = file("files/cart.txt");
// $end = end($qwe);
// $myexp = explode("-|-", $end);
//print_r($myexp);
//echo "</pre>";

 ?>
<!-- 
 <table>
    <tr>
        <?php foreach($myexp as $value): ?>
            <td><?php echo $value; ?></td>
        <?php endforeach; ?>
    </tr>
 </table> -->