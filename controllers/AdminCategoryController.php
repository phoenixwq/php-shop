<?php

class AdminCategoryController extends AdminBase
{

    public function actionIndex()
    {
        self::checkAdmin();
        $template = new Template(ROOT . '/views/admin_category/');   
        echo $template->render('index.php',
        [
            'categoriesList' => Category::getCategoriesListAdmin()
        ]);
        return true;
    }

    public function actionCreate()
    {
        self::checkAdmin();
        $errors = false;
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $sortOrder = $_POST['sort_order'];
            $status = $_POST['status'];

            if (!isset($name) || empty($name)) {
                $errors[] = 'Заполните поля';
            }


            if ($errors == false) {
                Category::createCategory($name, $sortOrder, $status);

                header("Location: /admin/category");
            }
        }

        $template = new Template(ROOT . '/views/admin_category/');   
        echo $template->render('create.php',[
            "errors"=> $errors
        ]);
        return true;
    }

    public function actionUpdate($id)
    {
        self::checkAdmin();

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $sortOrder = $_POST['sort_order'];
            $status = $_POST['status'];

            Category::updateCategoryById($id, $name, $sortOrder, $status);
            header("Location: /admin/category");
        }

        $template = new Template(ROOT . '/views/admin_category/');   
        echo $template->render('update.php',
        [
            'category' => Category::getCategoryById($id),
            'id'=>$id,
        ]);
        return true;
    }

    public function actionDelete($id)
    {
        self::checkAdmin();

        if (isset($_POST['submit'])) {
            Category::deleteCategoryById($id);
            header("Location: /admin/category");
        }

        $template = new Template(ROOT . '/views/admin_category/');   
        echo $template->render('delete.php',
        [
            'id'=>$id,
        ]);
        return true;
    }

}
