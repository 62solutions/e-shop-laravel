
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Интернет Магазин: продукт</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/starter-template.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="http://internet-shop.tmweb.ru">Интернет Магазин</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="http://internet-shop.tmweb.ru">Все товары</a></li>
                <li ><a href="/cats">Категории</a>
                </li>
                <li ><a href="http://internet-shop.tmweb.ru/basket">В корзину</a></li>
                <li><a href="http://internet-shop.tmweb.ru/reset">Сбросить проект в начальное состояние</a></li>
                <li><a href="http://internet-shop.tmweb.ru/locale/en">en</a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">₽<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                                                    <li><a href="http://internet-shop.tmweb.ru/currency/RUB">₽</a></li>
                                                    <li><a href="http://internet-shop.tmweb.ru/currency/USD">$</a></li>
                                                    <li><a href="http://internet-shop.tmweb.ru/currency/EUR">€</a></li>
                                            </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                                    <li><a href="http://internet-shop.tmweb.ru/login">Войти</a></li>
                
                            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="starter-template">
        <h1>IPhone X 64Gb</h1>
        <h2>{{$product}}</h2>
        <p>Цена: <b>71 900 руб.</b></p>
        <img src="/img/iphone_x.jpeg" alt="">
        <p>Отличный телефон с памятью 64Гб</p>
        <a class="btn btn-success" href="http://laravel-diplom-1.rdavydov.ru/basket/1/add">Добавить в корзину</a>
    </div>

</div>
   
</body>
</html>