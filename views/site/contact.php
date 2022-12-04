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
            <div class="schema_image_style">
            <?php echo $shop['about']; ?>

                <img src="/upload/images/shop/schema.png" alt="schema_image" class="schema_image" width="800">
            </div>
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