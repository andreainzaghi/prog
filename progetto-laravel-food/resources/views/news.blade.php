@extends('layouts.main')

@section('pageTitle')
	Prodotto
@endsection

@section('content')
	<div class="product">
		@foreach ($foods as $food)
		<p>{{$food['Food_Group']}}</p>
		@endforeach
	</div>
@endsection


{{-- 
// $test=array();

// foreach ($values as $value => $key) { 
// 		if(!in_array($key, $test)){
// 		$test[]=$value;
// 		}    
// } --}}