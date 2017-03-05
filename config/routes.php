<?php
    return array(
        'product/([0-9]+)' => 'product/view/$1',
        'catalog' => 'catalog/index',
        'category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2',
        'category/([0-9]+)' => 'catalog/category/$1',
        'cart/delete/([0-9])' => 'cart/delete/$1',
        'cart/addAjax/([0-9]+)' => 'cart/addAjax/$1',
        'cart/checkout' => 'cart/checkout',
        'cart' => 'cart/index',
        'user/register' => 'user/register',
        'user/login' => 'user/login',
        'user/logout' => 'user/logout',
        'cabinet/edit' => 'cabinet/edit',
        'cabinet' => 'cabinet/index',
        //Admin products:
        'admin/product/create' => 'adminProduct/create',
        'admin/product/update/([0-9])' => 'adminProduct/update/$1',
        'admin/product/delete/([0-9])' => 'adminProduct/delete/$1',
        'admin/product' => 'adminProduct/index',
        //Admin categories:
        'admin/category/create' => 'adminCategory/create',
        'admin/category/update/([0-9])' => 'adminCategory/update/$1',
        'admin/category/delete/([0-9])' => 'adminCategory/delete/$1',
        'admin/category' => 'adminCategory/index',
        //Admin orders:
        'admin/order/update/([0-9]+)' => 'adminOrder/update/$1',
        'admin/order/delete/([0-9]+)' => 'adminOrder/delete/$1',
        'admin/order/view/([0-9]+)' => 'adminOrder/view/$1',
        'admin/order' => 'adminOrder/index',
        //Admin main
        'admin' => 'admin/index',
        //About site
        'contacts' => 'site/contact',
        //Main page
        '' => 'site/index'
    );