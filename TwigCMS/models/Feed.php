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

        $head_tags = [
            "data" => date('Y-m-d H:i'),
            "shopname" => "Twig Shop",
            "shopurl" => "$scheme://$host",
        ];

        foreach($head_tags as $key => $val) {
            $shopname = $xml->createElement($key, $val);
            $catalog->appendChild($shopname);
        }

        $arr = ["name", "price", "amount", "visible", "image"];

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
        }

        //echo "<xmp>".$xml->saveXML()."</xmp>";
        $xml->save("../feed.xml");
    }
}
