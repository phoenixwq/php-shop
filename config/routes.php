<?php

return array(
    'product/([0-9]+)' => 'product/view/$1',
    'category/([0-9]+)' => 'catalog/category/$1/',   
    'category/([0-9]+)' => 'catalog/category/$1',
    'user/login' => 'user/login',
    'user/logout' => 'user/logout',
   
    'admin/product/create' => 'adminProduct/create',
    'admin/product/update/([0-9]+)' => 'adminProduct/update/$1',
    'admin/product/delete/([0-9]+)' => 'adminProduct/delete/$1',
    'admin/product' => 'adminProduct/index',

    'admin/category/create' => 'adminCategory/create',
    'admin/category/update/([0-9]+)' => 'adminCategory/update/$1',
    'admin/category/delete/([0-9]+)' => 'adminCategory/delete/$1',
    'admin/category' => 'adminCategory/index',
    'admin/shop/update'=>'adminShop/update',
    'admin' => 'admin/index',

    'contacts' => 'site/contact',
    'about' => 'site/about',

    'index.php' => 'site/index', 
    '' => 'site/index',
);
