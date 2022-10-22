
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Интернет Магазин: Все Категории</title>

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
                <li ><a href="http://internet-shop.tmweb.ru">Все товары</a></li>
                <li class="active"><a href="http://internet-shop.tmweb.ru/categories">Категории</a>
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
        <h1>{{$category->name}}</h1>

        <p>{{$category->description}}</p> 
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="/img/iphone_x.jpeg" alt="iPhone X 64Gb">
                    <div class="caption">
                        <h3>iPhone X 64 Gb</h3>
                        <p>30000 руб.</p>
                        <p>
                            <a href="..." class="btn btn-primary" role="button">В корзину</a>
                            <a href="..." class="btn btn-default" role="button">Подробнее</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="/img/iphone_x.jpeg" alt="iPhone X 64Gb">
                    <div class="caption">
                        <h3>iPhone X 64 Gb</h3>
                        <p>30000 руб.</p>
                        <p>
                            <a href="..." class="btn btn-primary" role="button">В корзину</a>
                            <a href="..." class="btn btn-default" role="button">Подробнее</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="/img/iphone_x.jpeg" alt="iPhone X 64Gb">
                    <div class="caption">
                        <h3>iPhone X 64 Gb</h3>
                        <p>30000 руб.</p>
                        <p>
                            <a href="..." class="btn btn-primary" role="button">В корзину</a>
                            <a href="..." class="btn btn-default" role="button">Подробнее</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="/img/iphone_x.jpeg" alt="iPhone X 64Gb">
                    <div class="caption">
                        <h3>iPhone X 64 Gb</h3>
                        <p>30000 руб.</p>
                        <p>
                            <a href="..." class="btn btn-primary" role="button">В корзину</a>
                            <a href="..." class="btn btn-default" role="button">Подробнее</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>                      
    </div>
</div>
</div>
</body>
</html>
