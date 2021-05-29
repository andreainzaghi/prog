@extends('layouts.main')

@section('pageTitle')
	Prodotto
@endsection

@section('content')
	<div class="product">
		<div class="container">
			<p>{{$food}}</p>

		</div>
	</div>
@endsection