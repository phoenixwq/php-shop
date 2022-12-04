<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/template/styles/index.css">
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
        <section class="bg-white">
                <?php if ($product['html']): ?>  
                    <?php echo $product['html']; ?>
                    <?php else: ?>
                        <img src="<?php echo $image; ?>" height=400 width=400>
                        <h2><?php echo $product['name']; ?></h2>
                        <p>Код товара: <?php echo $product['code']; ?></p>
                        <span>
                            <span>RUB <?php echo $product['price']; ?></span>
                        </span>
                        <p><b>Производитель:</b> <?php echo $product['brand']; ?></p>
                        <br/>
                        <h5>Описание товара:</h5> <?php echo $product['description']; ?>
                <?php endif; ?>
                </section>
        </div>
    </body>
</html>