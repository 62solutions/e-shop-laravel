@extends('master')


@section('title', 'Оформить заказ')

@section('content')
<div class="starter-template">
    <h1>Подтвердите заказ:</h1>
    <div class="container">
        <div class="row justify-content-center">
            <p>Общая стоимость заказа <b>70000 руб.</b></p>
            <form action="basket/accept" method="POST">
                <div>
                    <p>Укажите имя и номер телефона для связи:</p>

                    <div class="container">
                        <div class="form-group">
                            <label for="name" class="control-label col-lg-offset-3 col-lg-2">Имя: </label>
                            <div class="col-lg-4">
                                <input type="text" name="name" id="name" value="" class="form-control">
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <label for="phone" class="control-label col-lg-offset-3 col-lg-2">Номер телефона: </label>
                            <div class="col-lg-4">
                                <input type="text" name="phone" id="phone" value="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <br>
                    <input type="hidden" name="_token" value="giohrpiun"> <br>
                    <input type="submit" class="btn btn-success" href="/basket/place" value="Подтвердить заказ">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection