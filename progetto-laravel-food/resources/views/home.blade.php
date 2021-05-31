

@extends('layouts.main')

@section('pageTitle')
	Homa Page La Molisana | Sito Ufficiale 
@endsection

@section('content')
<div class="container-home">
	<section>
	
		

		{{-- {{route('homepage.filter',['filter' => 'vegetables'])}}" method="POST --}}
		
		{{-- {{  Form::open(array('action' => array('FoodController@index', 'method' => 'POST'))) }}
		    @csrf
            @method('POST')
	        <input name="filtro" type="text" placeholder="Scopri le caratteristiche della tua dieta">
			<button type="submit">submit</button>
        {{ Form::close() }} --}}


        <form method="GET"  action="/search">
			{{-- @csrf
            @method('POST') --}}
			<input name="search" type="search" class = "form-control" placeholder="Scopri le caratteristiche della tua dieta">
			
			<button type="submit">submit</button>
		</form>



	
	</section>

	<section>
		
		<div class="cards">
			 @foreach ($Foods as $food) 
			
			{{-- @if ($food == $search) --}}
			<div class="card">
				<a href="{{route('prodotto', [ 'id' => $food['id'] ])}}"><span>{{$food['name']}}</span><p>Calorie <span>{{$food['Calories']}}</span></p><p>Proteine <span>{{$food['Protein_g']}}</span></p><p>Grassi <span>{{$food['Fat_g']}}</span> </p><p>Carboidrati <span>{{$food['Carbohydrate_g']}}</span></p></a>
			</div>
			{{-- @endif --}}
				
			
			@endforeach
		</div>
	</section>

</div>
@endsection