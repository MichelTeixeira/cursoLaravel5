<!DOCTYPE html>
<html>
    <head>
        <title>Laravel - Categoria</title>
    </head>
    <body>
        <div class="title">Laravel 5 - Listagem de Categorias</div>
        <div class="text">
            @foreach($categories AS $category)
            <li>
                {{ $category->name }} - {{ $category->description }}
            </li>
            @endforeach
        </div>
    </body>
</html>
