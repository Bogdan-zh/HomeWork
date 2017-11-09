<?php $page = getPage($pages, 1); ?>
<h1>Главная</h1>
<?php echo $page->description; ?>

<!-- вывод ВСЕХ товаров -->

<?php foreach ($products as $product): ?> 
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
