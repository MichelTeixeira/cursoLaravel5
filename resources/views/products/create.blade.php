@extends('app')

@section('content')
<div class="container">
    <h1>Criar Produto</h1>

	@if($errors->any())
		<ul class="alert">
			@foreach($errors->all() AS $error)
				<li>
					{{ $error }}
				</li>
			@endforeach()
		</ul>
	@endif

    {!! Form::open(['route'=>'products.store']) !!}

	<div class="form-group">
		{!! Form::label('Categoria', 'Categoria:') !!}
    	{!! Form::select('category_id', $categories, null, ['class'=>'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('Nome', 'Nome:') !!}
    	{!! Form::text('name', null, ['class'=>'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('Descrição', 'Descrição:') !!}
    	{!! Form::textarea('description', null, ['class'=>'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('Preço', 'Preço:') !!}
    	{!! Form::text('price', null, ['class'=>'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('Destaque', 'Destaque:') !!}
    	{!! Form::checkbox('featured', true, false) !!}
	</div>

	<div class="form-group">
		{!! Form::label('Recomendado', 'Recomendado:') !!}
    	{!! Form::checkbox('recommend', true, false) !!}
	</div>


	<div class="form-group">
    	{!! Form::submit('Adicionar', ['class'=>'btn btn-primary']) !!}
	</div>

    {!! Form::close() !!}
</div>
@endsection
		