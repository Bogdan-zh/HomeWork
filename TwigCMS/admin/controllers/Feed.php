<?php

class Feed
{
	public function createFeed()
	{
		$products = new Products();
		$products_catalog = $products->getProducts();
		
		$xml = new DOMDocument("1.0");
		//$xml->formatOutput=true;

		$scheme = $_SERVER['REQUEST_SCHEME'];
		$host = $_SERVER['HTTP_HOST'];

		$catalog = $xml->createElement("catalog");
		$xml->appendChild($catalog);

		$shopname = $xml->createElement("date", date('Y-m-d H:i'));
		$catalog->appendChild($shopname);

		$shopname = $xml->createElement("shopname", "Twig Shop");
		$catalog->appendChild($shopname);

		$shopurl = $xml->createElement("shopurl", $scheme."://".$host);
		$catalog->appendChild($shopurl);

		$arr = ["name", "price", "amount"];

		foreach($products_catalog as $prod) {
			$product = $xml->createElement("product");
			$product->setAttribute("id", $prod['id']);
			$catalog->appendChild($product);

			foreach($arr as $a) {
				$a = $xml->createElement("$a", $prod["$a"]);
				$product->appendChild($a);
			}

			$description = $xml->createElement("description", strip_tags($prod['description']));
			$product->appendChild($description);

			$url = $xml->createElement("url", $scheme."://".$host."/".'products'."/".$prod['url']);
			$product->appendChild($url);
				
			$image = $xml->createElement("image", $_SERVER['DOCUMENT_ROOT'].'/uploads/products/'.$prod['image']);
			$product->appendChild($image);
		}

		//echo "<xmp>".$xml->saveXML()."</xmp>";
		$xml->save("../feed.xml");
	}
}
