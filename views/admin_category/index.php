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
        <a href="/admin/category/create" class="btn btn-default back"><i class="fa fa-plus"></i> Добавить категорию</a>
        <hr>
        <h4>Список категорий</h4>

        <br/>

        <table cellpadding="15" cellspacing="0">
            <tr>
                <th>ID категории</th>
                <th>Название категории</th>
                <th>Порядковый номер</th>
                <th>Статус</th>
                <th></th>
                <th></th>
            </tr>
            <?php foreach ($categoriesList as $category): ?>
                <tr>
                    <td><?php echo $category['id']; ?></td>
                    <td><?php echo $category['name']; ?></td>
                    <td><?php echo $category['sort_order']; ?></td>
                    <td><?php echo Category::getStatusText($category['status']); ?></td>  
                    <td><a href="/admin/category/update/<?php echo $category['id']; ?>" title="Редактировать">Редактировать</a></td>
                    <td><a href="/admin/category/delete/<?php echo $category['id']; ?>" title="Удалить">Удалить</a></td>
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