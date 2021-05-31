@extends('layouts.main')

@section('pageTitle')
	Prodotto
@endsection

@section('content')
	<div class="product">

		@foreach ($food as $foo)
		<div class="container">
			{{-- @if($foo['Food_Group']=='') --}}
			  <p>{{$foo['Food_Group']}}</p> 
		    {{-- @endif --}}
		</div>
		@endforeach
	
	</div>
@endsection



