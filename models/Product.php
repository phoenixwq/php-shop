<?php

class Product
{

    const SHOW_BY_DEFAULT = 10;

    public static function getLatestProducts($count = self::SHOW_BY_DEFAULT)
    {
        $db = Db::getConnection();

        $sql = 'SELECT id, name, price, brand FROM product '
                . 'ORDER BY id DESC '
                . 'LIMIT :count';
        $result = $db->prepare($sql);
        $result->bindParam(':count', $count, PDO::PARAM_INT);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();

        $i = 0;
        $productsList = array();
        while ($row = $result->fetch()) {
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['price'] = $row['price'];
            $productsList[$i]['brand'] = $row['brand'];
            $productsList[$i]['image'] = Product::getImage($row['id']);
            $i++;
        }
        return $productsList;
    }

    public static function getProductsListByCategory($categoryId)
    {
        $db = Db::getConnection();

        $sql = 'SELECT id, name, price, brand FROM product '
                . 'WHERE category_id = :category_id ';

        $result = $db->prepare($sql);
        $result->bindParam(':category_id', $categoryId, PDO::PARAM_INT);
        $result->execute();

        $i = 0;
        $products = array();
        while ($row = $result->fetch()) {
            $products[$i]['id'] = $row['id'];
            $products[$i]['name'] = $row['name'];
            $products[$i]['price'] = $row['price'];
            $products[$i]['brand'] = $row['brand'];
            $products[$i]['image'] = Product::getImage($row['id']);
            $i++;
        }
        return $products;
    }

    public static function getProductById($id)
    {
        $db = Db::getConnection();
        $sql = 'SELECT * FROM product WHERE id = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();

        return $result->fetch();
    }

    public static function getTotalProductsInCategory($categoryId)
    {
        $db = Db::getConnection();
        $sql = 'SELECT count(id) AS count FROM product WHERE category_id = :category_id';
        $result = $db->prepare($sql);
        $result->bindParam(':category_id', $categoryId, PDO::PARAM_INT);

        $result->execute();
        $row = $result->fetch();

        return $row['count'];
    }

    public static function getProdustsByIds($idsArray)
    {
        $db = Db::getConnection();

        $idsString = implode(',', $idsArray);

        $sql = "SELECT * FROM product WHERE id IN ($idsString)";

        $result = $db->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $i = 0;
        $products = array();
        while ($row = $result->fetch()) {
            $products[$i]['id'] = $row['id'];
            $products[$i]['code'] = $row['code'];
            $products[$i]['name'] = $row['name'];
            $products[$i]['price'] = $row['price'];
            $products[$i]['brand'] = $row['brand'];
            $products[$i]['image'] = Product::getImage($row['id']);
            $products[$i]['html'] = $row['html'];

            $i++;
        }
        return $products;
    }

    public static function getProductsList()
    {

        $db = Db::getConnection();

        $result = $db->query('SELECT id, name, price, code, html, brand FROM product ORDER BY id ASC');
        $productsList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['code'] = $row['code'];
            $productsList[$i]['brand'] = $row['brand'];
            $productsList[$i]['price'] = $row['price'];
            $productsList[$i]['image'] = Product::getImage($row['id']);
            $productsList[$i]['html'] = $row['html'];
            $i++;
        }
        return $productsList;
    }

    public static function deleteProductById($id)
    {
        $db = Db::getConnection();
        $sql = 'DELETE FROM product WHERE id = :id';
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }

    public static function updateProductById($id, $options)
    {

        $db = Db::getConnection();

        $sql = "UPDATE product
            SET 
                name = :name, 
                code = :code, 
                price = :price, 
                category_id = :category_id, 
                brand = :brand, 
                description = :description,
                html =:html
            WHERE id = :id";

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':code', $options['code'], PDO::PARAM_STR);
        $result->bindParam(':price', $options['price'], PDO::PARAM_STR);
        $result->bindParam(':category_id', $options['category_id'], PDO::PARAM_INT);
        $result->bindParam(':brand', $options['brand'], PDO::PARAM_STR);
        $result->bindParam(':description', $options['description'], PDO::PARAM_STR);
        $result->bindParam(':html', $options['html'], PDO::PARAM_STR);
        return $result->execute();
    }

    public static function createProduct($options)
    {

        $db = Db::getConnection();
        $sql = 'INSERT INTO product '
                . '(name, code, price, category_id, brand,'
                . 'description, html)'
                . 'VALUES '
                . '(:name, :code, :price, :category_id, :brand,'
                . ':description, :html)';

        $result = $db->prepare($sql);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':code', $options['code'], PDO::PARAM_STR);
        $result->bindParam(':price', $options['price'], PDO::PARAM_STR);
        $result->bindParam(':category_id', $options['category_id'], PDO::PARAM_INT);
        $result->bindParam(':brand', $options['brand'], PDO::PARAM_STR);
        $result->bindParam(':description', $options['description'], PDO::PARAM_STR);
        $result->bindParam(':html', $options['html'], PDO::PARAM_STR);
        if ($result->execute()) {
            return $db->lastInsertId();
        }
        return 0;
    }


    public static function getImage($id)
    {
        $noImage = 'no-image.jpg';
        $path = '/upload/images/products/';
        $pathToProductImage = $path . $id . '.jpg';

        if (file_exists($_SERVER['DOCUMENT_ROOT'].$pathToProductImage)) {
            return $pathToProductImage;
        }

        return $path . $noImage;
    }

}
