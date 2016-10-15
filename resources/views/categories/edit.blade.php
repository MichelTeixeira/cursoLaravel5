@extends('app')

@section('content')
<div class="container">
    <h1>Editar Categoria: {{ $category->name }}</h1>

	@if($errors->any())
		<ul class="alert">
			@foreach($errors->all() AS $error)
				<li>
					{{ $error }}
				</li>
			@endforeach()
		</ul>
	@endif

    {!! Form::open(['route'=>['categories.update', $category->id], 'method'=>'put']) !!}

	<div class="form-group">
		{!! Form::label('name', 'Nome:') !!}
    	{!! Form::text('name', $category->name, ['class'=>'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('Descrição', 'Descrição:') !!}
    	{!! Form::textarea('description', $category->description, ['class'=>'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::hidden('id', $category->id, ['class'=>'form-control']) !!}
    	{!! Form::submit('Salvar', ['class'=>'btn btn-primary']) !!}
	</div>

    {!! Form::close() !!}
</div>
@endsection
		