<!DOCTYPE html>
<html>
    <head>
        <title>Laravel - Produto</title>
    </head>
    <body>
        <div class="title">Laravel 5 - Listagem de Produto</div>
        <div class="text">
            @foreach($products AS $product)
            <li>
                {{ $product->name }} - {{ $product->description }} : {{ $product->price }}
            </li>
            @endforeach
        </div>
    </body>
</html>
