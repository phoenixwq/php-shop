<?php

class AdminShopController extends AdminBase
{

    public function actionUpdate()
    {
        self::checkAdmin();
        if (isset($_POST['submit'])) {
            if (Shop::updateShop($_POST['general'],$_POST['about'],$_POST['contact'])) {
                if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                   move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/upload/images/products/shop1.jpg");
                }
            }
            header("Location: /admin/");
        }

        $template = new Template(ROOT . '/views/admin_shop/');   
        echo $template->render('update.php',
        [
            'shop' => Shop::getShop(),
        ]);
        return true;
    }

}
