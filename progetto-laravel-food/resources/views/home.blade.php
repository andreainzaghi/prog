

@extends('layouts.main')

@section('pageTitle')
	Homa Page La Molisana | Sito Ufficiale 
@endsection

@section('content')
<div class="container-home">
	<section>
	
		

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
			
			@if ($food['name'] == $search)
			<div class="card">
				<a href="{{route('prodotto', [ 'id' => $food['id'] ])}}"><span>{{$food['name']}}</span><p>Calorie <span>{{$food['Calories']}}</span></p><p>Proteine <span>{{$food['Protein_g']}}</span></p><p>Grassi <span>{{$food['Fat_g']}}</span> </p><p>Carboidrati <span>{{$food['Carbohydrate_g']}}</span></p></a>
			</div>
			@endif
				
			
			@endforeach
		</div>
	</section>

</div>
@endsection