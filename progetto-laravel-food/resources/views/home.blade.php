@extends('layouts.main')

@section('pageTitle')
	Homa Page La Molisana | Sito Ufficiale 
@endsection

@section('content')
<div class="container">
	<section>
		<h2>Snacks</h2>
		<div class="cards">
			@foreach ($Snacks as $food)
			<div class="card">
				<a href="{{route('prodotto', [ 'id' => $food['id'] ])}}"><p>{{$food}}</p></a>
				
				
			</div>
			@endforeach
		</div>
	</section>

	<section>
		<h2>Sweets</h2>
		<div class="cards">
			@foreach ($Sweets as $food)
			<div class="card">
				<a href="{{route('prodotto', [ 'id' => $food['id'] ])}}"><p>{{$food}}</p></a>
			</div>
			@endforeach
		</div>
	</section>

	<section>
		<h2>Vegetables</h2>
		<div class="cards">
			@foreach ($Vegetables as $food)
			<div class="card">
				<a href="{{route('prodotto', [ 'id' => $food['id'] ])}}"><p>{{$food}}</p></a>
			</div>
			@endforeach
		</div>
	</section>
</div>
@endsection