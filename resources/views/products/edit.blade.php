@extends('app')

@section('content')
<div class="container">
    <h1>Editar Produto: {{ $product->name }}</h1>

	@if($errors->any())
		<ul class="alert">
			@foreach($errors->all() AS $error)
				<li>
					{{ $error }}
				</li>
			@endforeach()
		</ul>
	@endif

    {!! Form::open(['route'=>['products.update', $product->id], 'method'=>'put']) !!}

	<div class="form-group">
		{!! Form::label('Categoria', 'Categoria:') !!}
    	{!! Form::select('category_id', $categories, $product->category->id, ['class'=>'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('name', 'Nome:') !!}
    	{!! Form::text('name', $product->name, ['class'=>'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('Descrição', 'Descrição:') !!}
    	{!! Form::textarea('description', $product->description, ['class'=>'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('Preço', 'Preço:') !!}
    	{!! Form::text('price', $product->price, ['class'=>'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('Destaque', 'Destaque:') !!}
    	{!! Form::checkbox('featured', true, $product->featured) !!}
	</div>

	<div class="form-group">
		{!! Form::label('Recomendado', 'Recomendado:') !!}
    	{!! Form::checkbox('recommend', true, $product->recommend) !!}
	</div>

	<div class="form-group">
		{!! Form::hidden('id', $product->id, ['class'=>'form-control']) !!}
    	{!! Form::submit('Salvar', ['class'=>'btn btn-primary']) !!}
	</div>

    {!! Form::close() !!}
</div>
@endsection
		