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
            <a href="/admin/product">Управление Информацией о сайте</a>
            <hr>

            <h4>Редактировать</h4>

            <br/>

            <div class="col-lg-4">
                <div class="login-form">
                    <form action="#" method="post" enctype="multipart/form-data">

                        <p>Основная Информация Сайта</p>
                        <input type="text" name="general" placeholder="" value="<?php echo $shop['general']; ?>">

                        <p>О Сайте</p>
                        <input type="text" name="about" placeholder="" value="<?php echo $shop['about']; ?>">

                        <p>Контакты</p>
                        <input type="text" name="contact" placeholder="" value="<?php echo $shop['contact']; ?>">

                        <p>Изображение</p>
                        <input type="file" name="image" placeholder="" value="<?php echo $shop['image']; ?>">
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