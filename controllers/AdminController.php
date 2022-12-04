<?php

class AdminController extends AdminBase
{

    public function actionIndex()
    {
        self::checkAdmin();

        $template = new Template(ROOT . '/views/admin/');   
        echo $template->render('index.php', []);
        return true;
    }

}
