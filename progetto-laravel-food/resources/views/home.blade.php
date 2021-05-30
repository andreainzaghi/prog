

@extends('layouts.main')

@section('pageTitle')
	Homa Page La Molisana | Sito Ufficiale 
@endsection

@section('content')
<div class="container-home">
	<section>
	
		<h2>Snacks</h2>

  
		<form action="" method="GET">
			<input name="filter" type="text" placeholder="Scopri le caratteristiche della tua dieta">
			
			<button type="submit">submit</button>
		</form>


		<div class="cards">
			@foreach ($Snacks as $food)
			<div class="card">
				<a href="{{route('prodotto', [ 'id' => $food['id'] ])}}"><span class="titolo-name-food">{{$food['name']}}</span><p>Calorie <span>{{$food['Calories']}}</span></p><p>Proteine <span>{{$food['Protein_g']}}</span></p><p>Grassi <span>{{$food['Fat_g']}}</span> </p><p>Carboidrati <span>{{$food['Carbohydrate_g']}}</span></p></a>
			</div>
			@endforeach
		</div>
	</section>





	<section>
		<h2>Sweets</h2>
		<div class="cards">
			@foreach ($Sweets as $food)
			<div class="card">
				<a href="{{route('prodotto', [ 'id' => $food['id'] ])}}"><span>{{$food['name']}}</span><p>Calorie <span>{{$food['Calories']}}</span></p><p>Proteine <span>{{$food['Protein_g']}}</span></p><p>Grassi <span>{{$food['Fat_g']}}</span> </p><p>Carboidrati <span>{{$food['Carbohydrate_g']}}</span></p></a>
			</div>
			@endforeach
		</div>
	</section>

	<section>
		<h2>Vegetables</h2>
		<div class="cards">
			@foreach ($Vegetables as $food)
			<div class="card">
				<a href="{{route('prodotto', [ 'id' => $food['id'] ])}}"><span>{{$food['name']}}</span><p>Calorie <span>{{$food['Calories']}}</span></p><p>Proteine <span>{{$food['Protein_g']}}</span></p><p>Grassi <span>{{$food['Fat_g']}}</span> </p><p>Carboidrati <span>{{$food['Carbohydrate_g']}}</span></p></a>
			</div>
			@endforeach
		</div>
	</section>
</div>
@endsection