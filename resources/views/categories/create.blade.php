@extends('app')

@section('content')
<div class="container">
    <h1>Criar Categoria</h1>

	@if($errors->any())
		<ul class="alert">
			@foreach($errors->all() AS $error)
				<li>
					{{ $error }}
				</li>
			@endforeach()
		</ul>
	@endif

    {!! Form::open(['route'=>'categories.store']) !!}

	<div class="form-group">
		{!! Form::label('name', 'Nome:') !!}
    	{!! Form::text('name', null, ['class'=>'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('Descrição', 'Descrição:') !!}
    	{!! Form::textarea('description', null, ['class'=>'form-control']) !!}
	</div>

	<div class="form-group">
    	{!! Form::submit('Adicionar', ['class'=>'btn btn-primary']) !!}
	</div>

    {!! Form::close() !!}
</div>
@endsection
		