<?php
require_once('/config/Config.php');
require_once('/models/Database.php');
require_once('/models/Products.php');

$products = new Products();
$products_catalog = $products->getProducts();

$scheme = $_SERVER['REQUEST_SCHEME'];
$host = $_SERVER['HTTP_HOST'];


header("Content-type: text/xml; charset=UTF-8");

print 
"<?xml version='1.0' encoding='UTF-8'?>
<catalog date='".date('Y-m-d H:i')."'>";
print "<shopname>Twig Shop</shopname>";
print "<shopurl>".$scheme."://".$host."/"."</shopurl>";
foreach ($products_catalog as $product) {
	$id = $product['id'];
	print "<product id='$id'>";
	print "<name>".$product['name']."</name>";
	print "<price>".$product['price']."</price>";
	print "<amount>".$product['amount']."</amount>";
	print "<description>".strip_tags($product['description'])."</description>";
	print "<url>".$scheme."://".$host."/".'products'."/".$product['url']."</url>";
	print "<visible>".$product['visible']."</visible>";
	print "<image>".$_SERVER['DOCUMENT_ROOT'].'/uploads/products/'.$product['image']."</image>";
	print "</product>";
}

print "</catalog>";