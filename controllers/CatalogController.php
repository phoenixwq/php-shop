<?php

class CatalogController
{
    public function actionCategory($categoryId)
    {
        $categories = Category::getCategoriesList();
        $categoryProducts = Product::getProductsListByCategory($categoryId);
        $total = Product::getTotalProductsInCategory($categoryId);
        $template = new Template(ROOT . '/views/catalog/');   
        echo $template->render('category.php',
        [
            'categories' => Category::getCategoriesList(),
            'categoryProducts' => Product::getProductsListByCategory($categoryId),
            'total' => Product::getTotalProductsInCategory($categoryId),
            'user_status'=>User::isGuest(),
        ]);
        return true;
    }


}
