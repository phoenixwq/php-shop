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
        <a href="/admin/order">Управление категориями</a> 
        <hr>  
        <h4>Добавить новую категорию</h4>

        <br/>

        <?php if (isset($errors) && is_array($errors)): ?>
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li> - <?php echo $error; ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

                <form action="#" method="post">

                    <p>Название</p>
                    <input type="text" name="name" placeholder="" value="">

                    <p>Порядковый номер</p>
                    <input type="text" name="sort_order" placeholder="" value="">

                    <p>Статус</p>
                    <select name="status">
                        <option value="1" selected="selected">Отображается</option>
                        <option value="0">Скрыта</option>
                    </select>

                    <br><br>

                    <input type="submit" name="submit" class="btn btn-default" value="Сохранить">
                </form>


    </div>
</div>

<footer>
        Copyright © 2007 - 2022 - Сlothing store. All Rights Reserved
</footer>

</body>
</html>