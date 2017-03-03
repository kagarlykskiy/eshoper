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
    <!--<link rel="apple-touch-icon" sizes="57x57" href="../../template/images/ico/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../../template/images/ico/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../../template/images/ico/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../../template/images/ico/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../../template/images/ico/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../../template/images/ico/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../../template/images/ico/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../../template/images/ico/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../../template/images/ico/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="../../template/images/ico/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../template/images/ico/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../../template/images/ico/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../template/images/ico/favicon-16x16.png">
    <link rel="manifest" href="../../template/images/ico/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../../template/images/ico/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">-->
</head><!--/head-->

<body>
<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i> +38 093 000 11 22</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> mishakagar@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="/"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="/"><i class="fa fa-google-plus"></i></a></li>
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
                            <li><a href="/">
                                    <i class="fa fa-shopping-cart"></i>
                                    Корзина&nbsp;(<span class="cart-count"><?=Cart::countItems(); ?>)</span>
                                </a>
                            </li>
                        <?php if (User::isGuest()): ?>
                            <li><a href="/user/login/"><i class="fa fa-lock"></i> Вход</a></li>
                        <?php else: ?>
                            <li><a href="/cabinet/"><i class="fa fa-user"></i> Аккаунт</a></li>
                            <li><a href="/user/logout/"><i class="fa fa-unlock"></i> Выход</a></li>
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
                            <li><a href="/blog">Блог</a></li>
                            <li><a href="/about">О магазине</a></li>
                            <li><a href="/contacts/">Контакты</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->
</header><!--/header-->