<?php

class SiteController
{


    public function actionIndex()
    {
        $template = new Template(ROOT . '/views/site/');
        
        echo $template->render('index.php',
        [
            'shop' => Shop::getShop(),
            'categories' => Category::getCategoriesList(),
            'latestProducts'=> Product::getLatestProducts(6),
            'user_status'=>User::isGuest(),
        ]);
        return true;
    }

    public function actionContact()
    {
        $template = new Template(ROOT . '/views/site/');
        echo $template->render('contact.php',
        [
            'shop' => Shop::getShop(),
            'categories' => Category::getCategoriesList(),
            'user_status'=>User::isGuest(),
        ]);
    return true;
    }
    

    public function actionAbout()
    {
        $template = new Template(ROOT . '/views/site/');
        echo $template->render('about.php',
        [
            'shop' => Shop::getShop(),
            'categories' => Category::getCategoriesList(),
            'user_status'=>User::isGuest(),
        ]);

        return true;
    }

}
