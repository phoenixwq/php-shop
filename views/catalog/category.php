<!DOCTYPE html>
<html lang="en">
<head>
        <link rel="stylesheet" href="/template/styles/index.css">
        <link rel="stylesheet" href="/template/styles/table.css">
    </head>

    <body>
        <input type="checkbox" id="drawer-toggle" name="drawer-toggle"/>
        <label for="drawer-toggle" id="drawer-toggle-label"></label>

        <header class='header'>
            <div class="header-content">
                <span>Computer Saller </span>
                <!-- <img src="cpu.png" alt="card__image" width="30" height="30"> -->
            </div>
        </header>
        <nav id="drawer">
           <ul>
              <li><a href="/">Main</a></li>
              <li><a href="/about/">About author</a></li>
              <li><a href="/contacts/">About company</a></li>
              <?php if ($user_status): ?>                                        
                <li  class="nav-item"><a href="/user/login/"><i class="fa fa-lock"></i> Вход</a></li>
            <?php else: ?>
                <li class="nav-item"><a href="/user/logout/"><i class="fa fa-unlock"></i> Выход</a></li>
            <?php endif; ?>
           </ul>
        </nav>
<div class="container">
    <div class="row">
    <div class="main">    
    <table>
    <tr>
        <th>Изображение</th>
        <th>Название</th>
        <th>Бренд</ht>
        <th>Цена</th>
    </tr>

    <?php foreach ($categoryProducts as $product): ?>
    <tr>
        <td>
            <a href="/product/<?php echo $product['id']; ?>">
            <img src="<?php echo $product['image']; ?>" height=300 width=300></a>
        </td>
        <td><?php echo $product['name']; ?></td>
        <td><?php echo $product['brand']; ?></td>
        <td>$<?php echo $product['price']; ?></td>        
    </tr>
    
    <?php endforeach; ?>

    </table>
    </div>                            
    </div>
</div>


<footer>
        Copyright © 2007 - 2022 - Сlothing store. All Rights Reserved
</footer>

</body>
</html>