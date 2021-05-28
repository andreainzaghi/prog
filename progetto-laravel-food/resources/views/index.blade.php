<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
<div class="container">
	<section>
		<h2>Snacks</h2>
		<div class="cards">
			@foreach ($Snacks as $key => $food)
			<div class="card">
				
				<p>{{$food}}</p>
				
			</div>
			@endforeach
		</div>
	</section>

	<section>
		<h2>Sweets</h2>
		<div class="cards">
			@foreach ($Sweets as $key => $food)
			<div class="card">
				<p>{{$food}}</p>
			</div>
			@endforeach
		</div>
	</section>

	<section>
		<h2>Vegetables</h2>
		<div class="cards">
			@foreach ($Vegetables as $key => $food)
			<div class="card">
				<p>{{$food}}</p>
			</div>
			@endforeach
		</div>
	</section>
</div>
</body>
</html>


