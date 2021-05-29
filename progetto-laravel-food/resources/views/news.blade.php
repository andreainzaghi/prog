@extends('layouts.main')

@section('pageTitle')
	Prodotto
@endsection

@section('content')
	<div class="product">

		@foreach ($food as $foo)
		<div class="container">
			
			  <p>{{$foo}}</p> 
		    
		</div>
		@endforeach
	
	</div>
@endsection