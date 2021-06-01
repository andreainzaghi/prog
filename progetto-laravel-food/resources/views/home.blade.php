
@extends('layouts.main')

@section('pageTitle')
	Homa Page La Molisana | Sito Ufficiale 
@endsection

@section('content')
<div class="container-home" >
	<section>
        <form method="GET"  action="/search">
			{{-- @csrf
            @method('POST') --}}
			<div><input name="search" v-model="title" type="search" class = "form-control" placeholder="Scopri le caratteristiche della tua dieta"></div>
			<div><button type="submit"  v-on:click='imagesSearch'>submit</button></div>
		</form>
	</section>
	<section>
		<div class="cards">		
			 @foreach ($Foods as $food) 
			<div class="card">
				<div >
					<div >
						<img :src="image.largeImageURL" alt="" height=100px width=100px>
						
					  </div>
				</div>
				<a href="{{route('prodotto', [ 'id' => $food['id'] ])}}"><span>{{$food['name']}}</span><p>Calorie <span>{{$food['Calories']}}</span></p><p>Proteine <span>{{$food['Protein_g']}}</span></p><p>Grassi <span>{{$food['Fat_g']}}</span> </p><p>Carboidrati <span>{{$food['Carbohydrate_g']}}</span></p></a>
			</div>
			@endforeach
		</div>
	</section>
</div>
@endsection

@section('js')
	<script src="{{asset('js/pixabayapi.js')}}"></script>
@endsection
