<?php
class Catalog extends Core
{
    public function fetch()
    {
        $request = new Request();
        $carts = new Carts();

        $categories = new Categories();
        $all_categories = $categories->getCategories();
        $categories_catalog_tree = $categories->GetCategoriesTree();

        $pages = new Pages();
        $all_pages = $pages->getPages();

        $products = new Products();

        $uri = parse_url($_SERVER['REQUEST_URI']);
        $parts = explode('/', $uri['path']);

        if (isset($parts[2])) {
            $catalog = $categories->getCategory($parts[2], 'url');
        }

        $children = $categories->getChildren($catalog['id']);
        $cat_filter = array();
        $cat_filter[] = $catalog['id'];

        foreach ($children  as $value) {
            $cat_filter[] = $value['id'];
        }

        $filter['cat_id'] = $cat_filter;
        $products = $products->getProducts($filter);


        if($request->post('to_cart')) {
            $id = $request->post('id', 'integer');
            $amount = 1;

            $carts->addToCart($id, $amount); // добавление товара в корзину с главной страницы
            header("Location:".$_SERVER['HTTP_REFERER']);
        }

        $cart = $carts->getCart();
        $amount_in_cart = $cart['amount'];
        $total = $cart['total'];


        $array_vars = array(
            'catalog' => $catalog,
            'categories' => $all_categories,
            'categories_tree' => $categories_catalog_tree,
            'pages' => $all_pages,
            'products' => $products,
            'amount_in_cart' => $amount_in_cart,
            'total' => $total,
        );

        if($catalog) {
            return $this->view->render('catalog.html',$array_vars);
        } else {
            header("http/1.0 404 not found");
            return $this->view->render('error404.html',$array_vars);
        }
        
    }
}