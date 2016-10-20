@extends('app')

@section('content')
<div class="Container">
    <h1>Produtos</h1>

    <p><a href="{{ route('products.create') }}"><button class="btn">Novo Produto</button></a></p>

    <table class="table">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Preço</th>
            <th>Categoria</th>
            <th>Destaque</th>
            <th>Recomendado</th>
            <th>Ação</th>
        </tr>
        @foreach($products AS $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ number_format($product->price, 2, ',', '.') }}</td>
                <td>{{ $product->category->name }}</td>
                <td>{{ ($product->featured) ? 'Sim' : '' }}</td>
                <td>{{ ($product->recommend) ? 'Sim' : '' }}</td>
                <td>
                    <a href="{{ route('products.edit', ['id'=>$product->id]) }}">Edit</a> | 
                    <a href="{{ route('products.destroy', ['id'=>$product->id]) }}">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $products->render() !!}
</div>
@endsection
