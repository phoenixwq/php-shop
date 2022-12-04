<!DOCTYPE html>
<html>

    <head>
        <link rel="stylesheet" href="/template/styles/index.css">
        <link rel="stylesheet" href="/template/styles/table.css">
    </head>

    <body>
        <input type="checkbox" id="drawer-toggle" name="drawer-toggle"/>
        <label for="drawer-toggle" id="drawer-toggle-label"></label>

        <header class='header'>
            <div class="header-content">
                <span>Admin </span>
            </div>
        </header>
        <nav id="drawer">
           <ul>
           <li><a href="/admin/product">Управление товарами</a></li>
                <li><a href="/admin/category">Управление категориями</a></li>
                <li><a href="/admin/shop/update">Управление Информацией о сайте</a></li>
                <li><a href="/"><i class="fa fa-sign-out"></i>На сайт</a></li>
           </ul>
        </nav>
<section>
    <div class="container">
        <div class="row">

            <br/>
            <a href="/admin/product">Управление товарами</a>
            <hr>

            <h4>Редактировать товар #<?php echo $id; ?></h4>

            <br/>

            <div class="col-lg-4">
                <div class="login-form">
                    <form action="#" method="post" enctype="multipart/form-data">

                        <p>Название товара</p>
                        <input type="text" name="name" placeholder="" value="<?php echo $product['name']; ?>">

                        <p>Артикул</p>
                        <input type="text" name="code" placeholder="" value="<?php echo $product['code']; ?>">

                        <p>Стоимость, $</p>
                        <input type="text" name="price" placeholder="" value="<?php echo $product['price']; ?>">

                        <p>Категория</p>
                        <select name="category_id">
                            <?php if (is_array($categoriesList)): ?>
                                <?php foreach ($categoriesList as $category): ?>
                                    <option value="<?php echo $category['id']; ?>" 
                                        <?php if ($product['category_id'] == $category['id']) echo ' selected="selected"'; ?>>
                                        <?php echo $category['name']; ?>
                                    </option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                        
                        <br/><br/>

                        <p>Производитель</p>
                        <input type="text" name="brand" placeholder="" value="<?php echo $product['brand']; ?>">

                        <p>Изображение товара</p>
                        <input type="file" name="image" placeholder="" value="<?php echo $product['image']; ?>">

                        <p>Детальное описание</p>
                        <textarea name="description"><?php echo $product['description']; ?></textarea>

                        <p>HTML</p>
                        <textarea name="html"><?php echo $product['html']; ?></textarea>
                        
                        <br/><br/>
                        
                        <input type="submit" name="submit" class="btn btn-default" value="Сохранить">
                        
                        <br/><br/>
                        
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<footer>
        Copyright © 2007 - 2022 - Сlothing store. All Rights Reserved
</footer>

</body>
</html>