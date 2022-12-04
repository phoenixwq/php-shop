<?php

class AdminProductController extends AdminBase
{

    public function actionIndex()
    {
        self::checkAdmin();
        $template = new Template(ROOT . '/views/admin_product/');   
        echo $template->render('index.php',
        [
            'productsList' => Product::getProductsList()
        ]);
        return true;
        
    }

    public function actionCreate()
    {
        self::checkAdmin();
        $categoriesList = Category::getCategoriesListAdmin();

        if (isset($_POST['submit'])) {
            $options['name'] = $_POST['name'];
            $options['code'] = $_POST['code'];
            $options['price'] = $_POST['price'];
            $options['category_id'] = $_POST['category_id'];
            $options['brand'] = $_POST['brand'];
            $options['html'] = $_POST['html'];
            $errors = false;

            if (!isset($options['name']) || empty($options['name'])) {
                $errors[] = 'Заполните поля';
            }

            if ($errors == false) {
                $id = Product::createProduct($options);
                
                if ($id) {
                    if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                        move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/upload/images/products/{$id}.jpg");
                    }
                };

                header("Location: /admin/product/create/");
            }
            
        }

        $template = new Template(ROOT . '/views/admin_product/');   
        echo $template->render('create.php',
        [
            'categoriesList' => Category::getCategoriesListAdmin(),

        ]);
        return true;
    }

    public function actionUpdate($id)
    {
        self::checkAdmin();
        if (isset($_POST['submit'])) {
            $options['name'] = $_POST['name'];
            $options['code'] = $_POST['code'];
            $options['price'] = $_POST['price'];
            $options['category_id'] = $_POST['category_id'];
            $options['brand'] = $_POST['brand'];
            $options['html'] = $_POST['html'];
            $options['description'] = $_POST['description'];


            if (Product::updateProductById($id, $options)) {


                if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                   move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/upload/images/products/{$id}.jpg");
                }
            }

            header("Location: /admin/product");
        }

        $template = new Template(ROOT . '/views/admin_product/');   
        echo $template->render('update.php',
        [
            'categoriesList' => Category::getCategoriesListAdmin(),
            'id'=>$id,
            'product' => Product::getProductById($id)
        ]);
        return true;
    }

    public function actionDelete($id)
    {
        self::checkAdmin();

        if (isset($_POST['submit'])) {
            Product::deleteProductById($id);
            header("Location: /admin/product");
        }

        $template = new Template(ROOT . '/views/admin_product/');   
        echo $template->render('delete.php',
        [
            'id'=>$id,
        ]);
        return true;
    }

}
