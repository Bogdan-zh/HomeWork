<?php $page = getPage($pages, $_GET['id']); ?>
<div>
<h1><?php echo $page->name ?></h1>


    <?php echo $page->description ?>
</div>