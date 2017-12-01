<?php
$cat_1 = new stdClass();
$cat_1->name = 'Бытовая техника';
$cat_1->url = 'url_1';
$cat_1->visible = 1;
$cat_1->id = 1;
$cat_1->parent_id = 0;

$cat_4 = new stdClass();
$cat_4->name = 'A5';
$cat_4->url = 'url_1';
$cat_4->visible = 1;
$cat_4->id = 4;
$cat_4->parent_id = 3;

$cat_3 = new stdClass();
$cat_3->name = 'Samsung';
$cat_3->url = 'url_3';
$cat_3->visible = 1;
$cat_3->id = 3;
$cat_3->parent_id = 2;
$cat_3->subcategories = array(0=>$cat_4);

$cat_2 = new stdClass();
$cat_2->name = 'Мобильные телефоны';
$cat_2->url = 'url_2';
$cat_2->visible = 1;
$cat_2->id = 2;
$cat_2->parent_id = 0;
$cat_2->subcategories = array(0=>$cat_3);

$cat_5 = new stdClass();
$cat_5->name = 'Пылесосы';
$cat_5->url = 'url_5';
$cat_5->visible = 1;
$cat_5->id = 5;
$cat_5->parent_id = 0;

/*Создание массива с обьектами категорий START*/
$categories1 = array(
 0 => $cat_1,
 1 => $cat_2,
 2 => $cat_5,
);
/*Создание массива с обьектами категорий END*/

/*
 * В данном примере я создал массиов обьектов, для того что показать работу
 * рекурсивной функции именно с таким форматом данных.
 * В нашей CMS мы будем строить именно таким образом данные.
 *
 * */



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
//$cat = GetCategoriesTree($categories);




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