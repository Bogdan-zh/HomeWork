<?php

class Feed extends Database
{
	public function createFeed()
	{
		$result = $this->query("SELECT id, name, price, amount, description, url, visible, bestseller, image FROM products");

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

		while($row = mysqli_fetch_array($result)) {
			$product = $xml->createElement("product");
			$product->setAttribute("id", $row['id']);
			$catalog->appendChild($product);

			foreach($arr as $a) {
				$a = $xml->createElement("$a", $row["$a"]);
				$product->appendChild($a);
			}

			$description = $xml->createElement("description", strip_tags($row['description']));
			$product->appendChild($description);

			$url = $xml->createElement("url", $scheme."://".$host."/".'products'."/".$row['url']);
			$product->appendChild($url);
				
			$image = $xml->createElement("image", $_SERVER['DOCUMENT_ROOT'].'/uploads/products/'.$row['image']);
			$product->appendChild($image);
		}

		//echo "<xmp>".$xml->saveXML()."</xmp>";
		$xml->save("../feed.xml");
	}
}
