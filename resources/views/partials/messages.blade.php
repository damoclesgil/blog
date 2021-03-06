@if (Session::has('success'))
	<div class="alert alert-success" role="alert">
		<strong>Sucesso:</strong> {{ Session::get('success') }}
	</div>
@elseif (Session::has('error'))
	<div class="alert alert-danger" role="alert">
		<strong>Erro:</strong> {{ Session::get('error') }}
	</div>
@endif

@if (count($errors) > 0)
	<div class="alert alert-danger" role="alert">
		<strong>Erros:</strong> 
		<ul>
		@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
		</ul>
	</div
@endif