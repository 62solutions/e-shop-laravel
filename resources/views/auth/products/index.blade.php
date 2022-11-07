@extends('auth.layouts.master')

@section('title', 'Продукты')

@section('content')
    <div class="col-md-12">
        <h1>Продукты</h1>
        <table class="table">
            <tbody>
            <tr>
                <th>
                    #
                </th>
                <th>
                    Код
                </th>
                <th>
                    Название
                </th>
                <th>
                    Категория
                </th>
                <th>
                    Цена
                </th>
            </tr>
            
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->code }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->category_id }}</td>
                    <td>{{ $product->price }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <form action="{{ route('products.destroy', $product) }}" method="POST">
                                <a class="btn btn-success" type="button" href="{{ route('products.show', $product->id) }}">Открыть</a>
                                <a class="btn btn-warning" type="button" href="{{ route('products.edit', $product->id) }}">Редактировать</a>
                                @csrf
                                @method('delete')
                                <input class="btn btn-danger" type="submit" value="Удалить">
                            </form>
                        </div>
                    </td>
                </tr>

            @endforeach    
        
            </tbody>
        </table>
      
        <a class="btn btn-success" type="button"
           href="{{ route('products.create') }}">Добавить продукт</a>
    </div>
@endsection