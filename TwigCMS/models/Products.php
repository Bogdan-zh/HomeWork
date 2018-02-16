<?php
class Products extends Database
{
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
        $this->query($query);
        return $this->resId();
    }

    public function getProduct($id, $type = 'id')
    {
        if(empty($id)) {
            return false;
        }
        $query = "SELECT id, name, price, amount, description, url, visible, bestseller, image FROM products WHERE $type = '$id' LIMIT 1";
        $this->query($query);
        return $this->result();
    }
    public function getProducts($filter = 0)
    {
        $filt = '';
        if(!empty($filter)) {
            $in = implode(',', $filter['cat_id']);
            $filt = "IN ($in)";
        }
        
        $query = "SELECT p.id, p.name, p.price, p.amount, p.description, p.url, p.visible, p.bestseller, p.image FROM products p INNER JOIN products_categories pc ON p.id = pc.product_id AND category_id $filt";

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
        $query = "UPDATE products SET $colum_sql WHERE id='$id'";
        $this->query($query);
        return $id;
    }

    public function productsCategories($id, $choice)
    {   
        $request = new Request();
        $category_id = $request->post('categories');
        
        if($choice == 'set') {
            $query = "INSERT INTO `products_categories`(product_id, category_id) VALUES ('$id', '$category_id')";
        } elseif($choice == 'update') {
            $query = "UPDATE `products_categories` SET category_id='$category_id' WHERE product_id='$id'";
        }

        $this->query($query);
        
    }

    public function getCategoryCurrentProduct($id) // получаем категорию, которая присвоена товару
    {
        $query = "SELECT p.category_id, c.id, c.name FROM `products_categories` p INNER JOIN categories c ON p.category_id = c.id WHERE product_id='$id'";
        $result = $this->query($query);
        $res = $result->fetch_assoc();
        return $res['name'];
    }

    public function getProductCategories($id = 0)
    {
        $where = '';
        if(!empty($id)) {
            $where .= "WHERE product_id = $id";
        }
        $query = "SELECT id, product_id, category_id FROM products_categories $where";
        $result = $this->query($query);
        return $this->results();
    }

}