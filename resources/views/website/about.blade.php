@extends('layouts.website')
@section('subtitle', 'Contato')

@section('content')
	<header class="pagehead">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Sobre</h1>
					<p>Lorem Ipsum Dolor Sit Amet</p>
				</div>
			</div>
		</div>
	</header>

	<section id="about">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<p>
					TaskList é um sistema mantido e desenvolvido por {{ $fullName }} desde 2017. Todo o processo de desenvolvimento foi publicado através do canal instanceof no Youtube com intuito educativo.
					O Sistema é inteiramente desenvolvido através do framework Laravel.
					Se você se interessou pelo software, não deixe de enviar um email para {{ $email }} com suas sugestões ou reclamações!
				</p>
			</div>
			<div class="col-md-4 text-center">
				<img src="http://placehold.it/300x300" class="img-responsive">
			</div>
		</div>
	</div>
</section>
	
	<section id="about-app">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1>Aplicativo Android</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae exercitationem suscipit non repellat rem atque rerum totam optio ipsam magni incidunt dicta nemo veniam, dolorem excepturi molestias beatae corporis quos.</p>
					<a href="#" class="btn btn-default">Baixar</a>
				</div>
			</div>
		</div>
	</section>

	<section id="about-instanceof">
		<div class="container">
			<div class="row">
				<div class="col-md-4 text-center">
					<img src="http://placehold.it/300x300" alt="">
				</div>
				<div class="col-md-8">
					<h1>Instanceof</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum illum, aut sunt molestias tempora amet maxime ipsum? Vero animi beatae, dicta? Ut repudiandae fugit alias quasi esse culpa. Facere, dolore?
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. In ipsa natus, vel non earum, distinctio iusto reprehenderit alias quisquam possimus, at qui nostrum ad enim totam repudiandae consectetur eius iste?
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum illum, aut sunt molestias tempora amet maxime ipsum? Vero animi beatae, dicta? Ut repudiandae fugit alias quasi esse culpa. Facere, dolore?</p>
				</div>
			</div>
		</div>
	</section>

@endsection