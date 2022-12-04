<!DOCTYPE html>
<html>

    <head>
        <link rel="stylesheet" href="/template/styles/index.css">
    </head>

    <body>
        <input type="checkbox" id="drawer-toggle" name="drawer-toggle"/>
        <label for="drawer-toggle" id="drawer-toggle-label"></label>

        <header class='header'>
            <div class="header-content">
                <span>Computer Saller </span>
                <img src="/upload/images/products/shop1.jpg" alt="card__image" width="30" height="30">
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
        <?php echo $shop['general']; ?>
        <div class="container">

            <?php foreach ($categories as $categoryItem): ?>
            
              <a class='link-card' href="/category/<?php echo $categoryItem['id']; ?>">
                      <div class="card">
                    <div class="card__header">
                        <div>
                            <img src="/upload/images/categories/<?php echo $categoryItem['name']; ?>.png" alt="card__image" class="card__image" width="600">
                        </div>
                    </div>
                    <div class="card__body">
                        <span class="tag tag-blue">CPU</span>
                        <h4><?php echo $categoryItem['name']; ?></h4>
                        
                    </div>
                </div>
              </a>
                
              <?php endforeach; ?>
            </div>
        
        <section class="bg-white">
            <div class="max-w-screen-xl px-4 py-12 mx-auto space-y-8 overflow-hidden sm:px-6 lg:px-8">
                <nav class="flex flex-wrap justify-center -mx-5 -my-2">
                    <div class="px-5 py-2">
                        Email: <a href="#">lorel@mail.com</a>
                    </div>
                </nav>
                    © 2021 SomeCompany, Inc. All rights reserved.
            </div>
        </section>

    </body>
</html>