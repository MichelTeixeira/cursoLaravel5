@extends('app')

@section('content')
<div class="Container">
    <h1>Categorias</h1>

    <p><a href="{{ route('categories.create') }}"><button class="btn">Nova Categoria</button></a></p>

    <table class="table">
    	<tr>
    		<th>ID</th>
    		<th>Nomes</th>
    		<th>Descrição</th>
    		<th>Ação</th>
    	</tr>
    	@foreach($categories AS $category)
    		<tr>
	    		<td>{{ $category->id }}</td>
	    		<td>{{ $category->name }}</td>
	    		<td>{{ $category->description }}</td>
	    		<td>
                    <a href="{{ route('categories.edit', ['id'=>$category->id]) }}">Edit</a> | 
                    <a href="{{ route('categories.destroy', ['id'=>$category->id]) }}">Delete</a>
                </td>
	    	</tr>
        @endforeach
    </table>

    {!! $categories->render() !!}
</div>
@endsection
		