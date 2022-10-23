@extends('master')
@section('title', 'Товар')
@section('content')
       
    <div class="starter-template">
        <h1>IPhone X 64Gb</h1>
        <h2>{{$product}}</h2>
        <p>Цена: <b>100 руб.</b></p>
        <img src="/img/iphone_x.jpeg" alt="">
        <p>descr</p>
        <a class="btn btn-success" href="http://laravel-diplom-1.rdavydov.ru/basket/1/add">Добавить в корзину</a>
    </div>

@endsection