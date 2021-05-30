@php
$menu = [
	[
		'name' => 'homepage',
		'label' => 'Home'
	],
	
	[
		'name' => 'prodotto',
		'label' => 'Prodotti'
	],
	[
		'name' => 'news',
		'label' => 'News'
	],
	[
		'name' => 'chilopage',
		'label' => 'Chilopage'
	]
];
@endphp

<header>
	<div class="container">
		
		<nav class="main-nav">
			<ul>
				@foreach ($menu as $item)
					<li class="{{Route::getCurrentRoute()->getName() == $item['name'] ? 'active' : ''}}">
						<a href="{{route($item['name'])}}">{{$item['label']}}</a>
					</li>
				@endforeach
			</ul>
		</nav>
	</div>
</header>
