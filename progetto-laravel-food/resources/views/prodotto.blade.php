@extends('layouts.main')

@section('pageTitle')
	Prodotto
@endsection

@section('content')
	<div class="product">
		<div class="container">
			<p>{{$food}}</p>
			<div class="product-chevron left">
				<a href="{{route('prodotto', ['id' => $prevProdottoId])}}">
					<i class="fas fa-chevron-left"></i> 
				</a>
			</div>

			<div class="product-chevron right">
				<a href="{{route('prodotto', ['id' => $nextProdottoId])}}">
					<i class="fas fa-chevron-right"></i> 
				</a>
			</div>

		</div>
	</div>
@endsection