<?php
class Categories extends Database
{
    /*public function __construct()
    {
        parent::__construct();
    }*/

    public function addCategory($category)
    {
        if(empty($category)) {
            return false;
        }
        foreach ($category as $column => $val) {
            $columns[] = $column;
            $values[] = "'".$val."'";
        }

        $colum_sql = implode(',',$columns);
        $val_sql = implode(',',$values);

        $query = "INSERT INTO categories ($colum_sql) VALUES ($val_sql)";
        
        $this->query($query);
        return $this->resId();
    }

    public function getCategory($id, $type = 'id')
    {
        if(empty($id)) {
            return false;
        }
        $query = "SELECT id, name, description, url, visible, image, parent_id FROM categories WHERE $type = '$id' LIMIT 1";
        $this->query($query);
        return $this->result();
    }
    public function getCategories()
    {
        $query = "SELECT id,name, description, url, visible, image, parent_id FROM categories";
        $this->query($query);
        return $this->results();
    }

    public function updateCategory($id, $category)
    {
        if(empty($id)) {
            return false;
        }
        foreach ($category as $column => $val) {
            $columns[] = $column."="."'".$val."'";
        }
        $colum_sql = implode(',',$columns);
        $query = "UPDATE categories SET $colum_sql WHERE id=$id";
        $this->query($query);
        return $id;
    }



    //Дерево категорий
    public function GetCategoriesTree($parent_id=0)
    {
        $results=array();
        $categories = $this->getCategories();
        if ($categories) {
            foreach ($categories as $category) {
                if ($category['parent_id'] == $parent_id && $category['visible']) {
                    if ($category['id'] != $parent_id) {
                        $subcategories = $this->GetCategoriesTree($category['id']);
                        if(!empty($subcategories))
                            $category['subcategories'] = $subcategories ;
                    };
                    $results[]=$category;
                    unset($category);
                }
            }
        }
        return $results;
    }


    //id категории в products
    public function GetCategoriesId($id)
    {
        $results=array();
        $results[]=$id;
        $categories = $this->getCategories();
        if ($categories) {
            foreach ($categories as $category) {
                if ($category['parent_id'] == $id) {
                    $results[] = $category['id'];
                    $id = $category['id'];
                }
            }
        }
//        print_r($results);
        return $results;
    }



}





