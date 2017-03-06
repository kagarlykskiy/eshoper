<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Главная</title>
    <link href="../../template/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../template/css/font-awesome.min.css" rel="stylesheet">
    <link href="../../template/css/prettyPhoto.css" rel="stylesheet">
    <link href="../../template/css/price-range.css" rel="stylesheet">
    <link href="../../template/css/animate.css" rel="stylesheet">
    <link href="../../template/css/main.css" rel="stylesheet">
    <link href="../../template/css/responsive.css" rel="stylesheet">
    <link rel="shortcut icon" href="../../template/images/ico/favicon.ico"/>
</head><!--/head-->

<body>
<div class="page-wrapper">
    <header id="header"><!--header-->
        <div class="header_top"><!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li class="tel"><a href="#"><i class="fa fa-phone"></i> +38 093 000 11 22</a></li>
                                <li class="tel"><a href="#"><i class="fa fa-envelope"></i> mishakagar@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li class="vk"><a href="https://new.vk.com/kagarlikskiy"><i class="fa fa-vk"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header_top-->

        <div class="header-middle"><!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="/"><img src="../../template/images/home/logo.png" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="/cart/">
                                        <i class="fa fa-shopping-cart"></i>
                                        Корзина&nbsp;(<span id="cart-count"><?=Cart::countItems(); ?></span>)
                                    </a>
                                </li>
                            <?php if (User::isGuest()): ?>
                                <li><a href="/user/login/"><i class="fa fa-lock"></i> Вход</a></li>
                                <li><a href="/user/register/"><i class="fa fa-sign-in"></i> Регистрация</a></li>
                            <?php else: ?>
                                <li><a href="/cabinet/"><i class="fa fa-user"></i> Аккаунт</a></li>
                                <li><a href="/user/logout/"><i class="fa fa-unlock"></i> Выход</a></li>
                            <?php if (User::isAdmin()): ?>
                                <li><a href="/admin"><i class="fa fa fa-cog fa-spin"></i> Панель администратора</a></li>
                            <?php endif; ?>

                            <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-middle-->

        <div class="header-bottom"><!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="/">Главная</a></li>
                                <li class="dropdown"><a href="/">Магазин<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="/catalog">Каталог товаров</a></li>
                                        <li><a href="/cart">Корзина</a></li>
                                    </ul>
                                </li>
                                <li><a href="/about">О магазине</a></li>
                                <li><a href="/contacts/">Контакты</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-bottom-->
    </header><!--/header-->