<?php

class ProductController
{

    public function actionView($productId)
    {
        $template = new Template(ROOT . '/views/product/');   
        echo $template->render('view.php',
        [
            'categories' => Category::getCategoriesList(),
            'product'=> Product::getProductById($productId),
            'image' => Product::getImage($productId),
            'latestProducts'=> Product::getLatestProducts(6),
            'user_status'=>User::isGuest(),
        ]);
        return true;
    }

}
