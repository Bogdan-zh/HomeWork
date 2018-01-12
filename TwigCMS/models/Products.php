<?php
class Products extends Database
{
    /*public function __construct()
    {
        parent::__construct();
    }*/

    public function addProduct($product)
    {
        if(empty($product)) {
            return false;
        }
        foreach ($product as $column => $val) {
            $columns[] = $column;
            $values[] = "'".$val."'";
        }

        $colum_sql = implode(',',$columns);
        $val_sql = implode(',',$values);

        $query = "INSERT INTO products ($colum_sql) VALUES ($val_sql)";
        //echo $query;
        $this->query($query);
        return $this->resId();
    }

    public function getProduct($id)
    {
        if(empty($id)) {
            return false;
        }
        $query = "SELECT id, name, price, amount, description, url, visible, bestseller, image FROM products WHERE id = $id LIMIT 1";
        $this->query($query);
        return $this->result();
    }
    public function getProducts()
    {

        $query = "SELECT id, name, price, amount, description, url, visible, bestseller, image FROM products";
        $this->query($query);
        return $this->results();
    }

    public function updateProduct($id, $product)
    {
        if(empty($id)) {
            return false;
        }
        foreach ($product as $column => $val) {
            $columns[] = $column."="."'".$val."'";
        }
        $colum_sql = implode(',',$columns);
        $query = "UPDATE products SET $colum_sql WHERE id=$id";
        $this->query($query);
        return $id;
    }

    ///////////////////////////////////////////////////////////////////

    public function productsCategories($id, $choice)
    {   
        $request = new Request();
        $category_id = $request->post('categories');
        //$category_id = $_POST['categories'];
        
        if($choice == 'set') {
            $query = "INSERT INTO `products-categories`(product_id, category_id) VALUES ('$id', '$category_id')";
        } elseif($choice == 'update') {
            $query = "UPDATE `products-categories` SET category_id='$category_id' WHERE product_id='$id'";
        }

        $this->query($query);
        
    }

    public function getCategoryForSelect($id) // получаем категорию, которая присвоена товару
    {
        $query = "SELECT p.category_id, c.id, c.name FROM `products-categories` p INNER JOIN categories c ON p.category_id = c.id WHERE product_id='$id'";
        $result = $this->query($query);
        $res = $result->fetch_assoc();
        return $res['name'];
    }

    ///////////////////////////////////////////////////////////////////
}