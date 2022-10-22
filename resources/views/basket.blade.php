
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Интернет Магазин: Корзина</title>

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
                <li ><a href="http://internet-shop.tmweb.ru/categories">Категории</a>
                </li>
                <li class="active"><a href="http://internet-shop.tmweb.ru/basket">В корзину</a></li>
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
                            <h1>Корзина</h1>
    <p>Оформление заказа</p>
    <div class="panel">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Название</th>
                <th>Кол-во</th>
                <th>Цена</th>
                <th>Стоимость</th>
            </tr>
            </thead>
            <tbody>
                            <tr>
                    <td>
                        <a href="http://internet-shop.tmweb.ru/mobiles/iphone_x_64">
                            <img height="56px" src="http://internet-shop.tmweb.ru/storage/products/iphone_x.jpg">
                            iPhone X 64GB
                        </a>
                    </td>
                    <td><span class="badge">2</span>
                        <div class="btn-group form-inline">
                            <form action="http://internet-shop.tmweb.ru/basket/remove/1" method="POST">
                                <button type="submit" class="btn btn-danger" href=""><span
                                        class="glyphicon glyphicon-minus" aria-hidden="true"></span></button>
                                <input type="hidden" name="_token" value="98ExPfISiZLN1fiWeIVwPop1tVLDTvEAYtZmH1I1">                            </form>
                            <form action="http://internet-shop.tmweb.ru/basket/add/1" method="POST">
                                <button type="submit" class="btn btn-success"
                                        href=""><span
                                        class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
                                <input type="hidden" name="_token" value="98ExPfISiZLN1fiWeIVwPop1tVLDTvEAYtZmH1I1">                            </form>
                        </div>
                    </td>
                    <td>71990 ₽</td>
                    <td>143980 ₽</td>
                </tr>
                        <tr>
                <td colspan="3">Общая стоимость:</td>
                <td>143980 ₽</td>
            </tr>
            </tbody>
        </table>
        <br>
        <div class="btn-group pull-right" role="group">
            <a type="button" class="btn btn-success" href="http://internet-shop.tmweb.ru/basket/place">Оформить заказ</a>
        </div>
    </div>
    </div>
</div>
</body>
</html>
