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

        <br/>
        <a href="/admin/product">Управление товарами</a>
        <hr>

        <h4>Удалить товар #<?php echo $id; ?></h4>
        <br/>

        <p>Вы действительно хотите удалить этот товар?</p>
        <br/>
        <form  method="post">
            <input type="submit" name="submit" value="Удалить" />
        </form>

    </div>
</div>

<footer>
        Copyright © 2007 - 2022 - Сlothing store. All Rights Reserved
</footer>

</body>
</html>