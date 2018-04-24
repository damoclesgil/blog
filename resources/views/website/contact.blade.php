@extends('layouts.website')
@section('subtitle', 'Contato')

@section('content')
	<header class="pagehead">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Contato</h1>
					<p>Envie-nos uma mensagem através do formulário!</p>
				</div>
			</div>
		</div>
	</header>

	<section id="contact">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
				@include('partials.messages')
					<h2>Formulário</h2>
					<hr>
					<form action="" method="POST">
						{{ csrf_field() }}
						<div class="form-group">
							<input type="text" class="form-control" name="name" placeholder="Nome">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="email" placeholder="Email">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="phone" placeholder="Telefone">
						</div>
						<div class="form-group">
							<textarea name="bodyMessage" cols="30" rows="10" class="form-control"></textarea>
						</div>
						<div class="form-group">
							<input type="submit" value="Enviar" class="btn btn-success">
						</div>
					</form>
				</div>
				<div class="col-md-6">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
				</div>
			</div>
		</div>
	</section>
@endsection