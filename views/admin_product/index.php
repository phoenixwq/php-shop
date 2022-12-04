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
        <a href="/admin/product/create" class="btn btn-default back"><i class="fa fa-plus"></i> Добавить товар</a>
        <hr>            
        <h4>Список товаров</h4>
        <table>
            <tr>
                <th>ID товара</th>
                <th>Артикул</th>
                <th>Название товара</th>
                <th>Цена</th>
                <th></th>
                <th></th>
            </tr>
            <?php foreach ($productsList as $product): ?>
                <tr>
                    <td><?php echo $product['id']; ?></td>
                    <td><?php echo $product['code']; ?></td>
                    <td><?php echo $product['name']; ?></td>
                    <td><?php echo $product['price']; ?></td>  
                    <td><a href="/admin/product/update/<?php echo $product['id']; ?>" title="Редактировать">Редактировать</a></td>
                    <td><a href="/admin/product/delete/<?php echo $product['id']; ?>" title="Удалить">Удалить</a></td>
                </tr>
            <?php endforeach; ?>
        </table>

    </div>
</div>

<footer>
        Copyright © 2007 - 2022 - Сlothing store. All Rights Reserved
</footer>

</body>
</html>
