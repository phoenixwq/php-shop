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
<div class="container">
    <div class="row">
        <a href="/admin/product">Управление товарами</a>
        <hr>
        <h4>Добавить новый товар</h4>
        <br/><br/>
        <?php if (isset($errors) && is_array($errors)): ?>
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li> - <?php echo $error; ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <div>

            <form action="#" method="post" enctype="multipart/form-data">

                <p>Название товара</p>
                <input type="text" name="name" placeholder="" value="">

                <p>Артикул</p>
                <input type="text" name="code" placeholder="" value="">

                <p>Стоимость, $</p>
                <input type="text" name="price" placeholder="" value="">

                <p>Категория</p>
                <select name="category_id">
                    <?php if (is_array($categoriesList)): ?>
                        <?php foreach ($categoriesList as $category): ?>
                            <option value="<?php echo $category['id']; ?>">
                                <?php echo $category['name']; ?>
                            </option>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </select>

                <br/><br/>

                <p>Производитель</p>
                <input type="text" name="brand" placeholder="" value="">

                <p>Изображение товара</p>
                <input type="file" name="image" placeholder="" value="">

                <p>Детальное описание</p>
                <textarea name="description"></textarea>

                <br/><br/>
                
                <p>HTML</p>
                <textarea name="html"></textarea>
                <br/><br/>

                <input type="submit" name="submit" value="Сохранить">
            </form>

        </div>

    </div>
</div>


<footer>
        Copyright © 2007 - 2022 - Сlothing store. All Rights Reserved
</footer>

</body>
</html>