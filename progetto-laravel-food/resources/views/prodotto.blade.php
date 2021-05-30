@extends('layouts.main')

@section('pageTitle')
	Prodotto
@endsection

@section('content')
	<div class="product-prodotto">
	<div class="product-prodotto1">
		<div class="product-chevron-left">
			<a href="{{route('prodotto', ['id' => $prevProdottoId])}}">
				<i class="fas fa-chevron-left"></i> 
			</a>
		</div>
		<div class="container-p">
			<div class="prod-food">
			<p><span>{{$food['name']}}</span><p>Calorie <span>{{$food['Calories']}}</span></p><p>Food Group <span>{{$food['Food_Group']}}</span></p><p>Zuccheri <span>{{$food['Sugars_g']}}</span></p><p>Cholesterol_mg <span>{{$food['Cholesterol_mgs']}}</span></p><p>Saturated_Fats_g <span>{{$food['Saturated_Fats_gs']}}</span></p><p>Proteine <span>{{$food['Protein_g']}}</span></p><p>Grassi <span>{{$food['Fat_g']}}</span> </p><p>Carboidrati <span>{{$food['Carbohydrate_g']}}</span></p></p>
		    </div>
		</div>
		<div class="product-chevron-right">
			<a href="{{route('prodotto', ['id' => $nextProdottoId])}}">
				<i class="fas fa-chevron-right"></i> 
			</a>
		</div>
	</div>
	</div>
@endsection