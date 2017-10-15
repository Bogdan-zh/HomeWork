<?php

require 'data/data_pages.php';
require 'data/data_categories.php';
require 'data/data_products.php';

/*--------------------------------------------------------------------*/

function getPages($data_pages) {
  if (file_exists('data/data_pages.php')) {
    return unserialize($data_pages);
  }
}
$pages = getPages($data_pages);
//print_r($pages);

/*--------------------------------------------------------------------*/

function getCat($data_categories) {
  if (file_exists('data/data_categories.php')) {
    return unserialize($data_categories);
  }
}
$categories = getCat($data_categories);
//print_r($categories);

/*--------------------------------------------------------------------*/

function getProducts($data_products) {
  if (file_exists('data/data_products.php')) {
    return unserialize($data_products);
  }
}
$products = getProducts($data_products);
//print_r($categories);

/*--------------------------------------------------------------------*/


// функция меню (переделать ниже)
function makeMenu($pages, $type = true) {
  if(is_array($pages)) {
    foreach ($pages as $page){ 
      if(($page->visible) && ($page->menu_id == 1)) {
        if($type) {
          if($page->id == 1) {
            echo "<a href='/shop'> $page->name </a>";
          } else {
            echo "<a href=?route=page&id=$page->id> $page->name </a>";
            }
        } else {
          if($page->id == 1) {
            echo "<a href='/shop'> $page->name </a><br>";
          } else {
            echo "<a href=?route=page&id=$page->id> $page->name </a><br>";
            }
        }
      }
    }
  }
}

/*--------------------------------------------------------------------*/

function getPage($pages, $id) {
  if(is_array($pages)) {
    return $pages[$id];
  }
}

/*--------------------------------------------------------------------*/

function getProduct($products,$id) {
    if(is_array($id)) {
        return $products[$id];
    }
}

/*--------------------------------------------------------------------*/


//построение дерева категорий
function GetCategoriesTree($categories,$parent_id=0) {

    $results=array();

    if ($categories) {
        foreach ($categories as $key => $category) {
            if ($category->parent_id==$parent_id) {
                if ($category->id!=$parent_id) {
                    $subcategories = GetCategoriesTree($categories,$category->id);
                    if(!empty($subcategories))
                        $category->subcategories = $subcategories;
                }
                $results[]=$category;
                unset($category);
            }
        }
    }
    return $results;
}
$cat = GetCategoriesTree($categories);


/*--------------------------------------------------------------------*/

// вывод на экран меню с подкатегориями
function getCategories($categories) {
  echo "<ul>";
  foreach ($categories as $category) {
    if($category->visible) {
      echo "<li><a href=\"$category->url\"> $category->name </a></li>";
      if(!empty($category->subcategories)) {
        getCategories($category->subcategories); 
      }
    }
  }
  echo "</ul>";
}

//getCategories($categories);

/*--------------------------------------------------------------------*/

//  Вывод меню, true = меню вертикальное, false = меню горизонтальное
function MainMenu($pages, $type = true) {
  if(is_array($pages)) {
    foreach ($pages as $page){ 
      if(($page->visible) && ($page->menu_id == 1)) {
        if ($type) {
          echo ('<a href=' . $page->url . '>' . $page->name . '</a><br>');
        } else {
          echo ('<a href=' . $page->url . '>' . $page->name . '</a>' . " ");
        }
      }
    }
  }
}

/*--------------------------------------------------------------------*/



?>