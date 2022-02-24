@extends('layouts.main')
@section('content')
	<div class="movie-info">
		<div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
			<img src="{{ 'https://image.tmdb.org/t/p/w780/'. $movies['poster_path'] }}" alt="" class="w-64 md:w-96" style="width:24rem">
			<div class="md:ml-24">
				<h2 class="text-4xl text-black font-semibold">{{ $movies['original_title'] }}</h2>
				<div class="flex flex-wrap items-center text-gray-400 mt-2">
					<span><i class="fa-solid fa-star text-red-500"></i></span>
					<span class="ml-1 text-black">{{ $movies['original_title'] }}</span>
					<span class="mx-2">|</span>
					<span>{{ $movies['vote_average'] * 10 . "%" }}</span>
					<span class="text-gray-600">{{ \Carbon\Carbon::parse($movies['release_date'])->format('M d, Y') }}</span>
				</div>

				<p class="text-black mt-8">
					{{ $movies['overview']}}
				</p>
				<p class="text-black"> Homepage : <a href="{{$movies['homepage'] }}" class="text-red-500">{{$movies['homepage'] }}</a></p>

				<div class="mt-12">
					<h4 class="text-red-500 font-semibold">Featured Cast</h4>
					<div class="flex mt-4">
						@foreach($movies['credits']['crew'] as $crew)
							@if($loop->index < 2)
								<div class="mr-8">
									<div class="text-black">{{ $crew['name'] }}</div>

									<div class="text-sm text-black">{{ $crew['job'] }}</div>
								</div>
							@endif
						@endforeach
					</div>

				</div>
				<div class="mt-12">
					<a href="#trailer" class="flex items-center bg-red-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-red-700 transition ease-in-out duration-150">
						<i class="fa-solid fa-circle-play mr-2 text-center text-white"></i>
						Ver trailer
					</a>
				</div>
			</div>

			
		</div>
	</div>

	@if(count($movies['videos']['results']) > 0 )
	<scroll-container>
		<scroll-page id="trailer">
			<div class="movie-cast bg-black">
				<div class="container flex justify-content-center align-items-center mx-auto px-4 py-16">
					@if($movies['videos']['results'][0]['key'])
					<div class="text-center">
						<iframe width="600" height="400" src="https://www.youtube.com/embed/{{$movies['videos']['results'][0]['key'] }}" title="{{ $movies['videos']['results'][0]['name'] }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						<p class="text-white">{{ $movies['videos']['results'][0]['name'] }}</p>
					</div>
						@else
						<div class="text-center">
							<p class="text-white text-lg">No found trailer, we sorry </p>
						</div>
					@endif

				</div>
			</div>
		</scroll-page>	
	</scroll-container>

	@endif
	<div class="movie-cast border-b border-gray-800">
		<div class="container mx-auto px-4 py-16">
			<h2 class="text-4xl  text-red-500 font-semibold">Cast</h2>
			<div class="grid grid-cols-4 md:grid-cols-3 lg:grid-cols-6 mt-8">
				@foreach($movies['credits']['cast'] as $cast)
					@if($loop->index < 20)
						<div class="mt-8">
							<div class="text-sm ml-4 text-black">	
								<img src="{{'https://image.tmdb.org/t/p/w780/'.$cast['profile_path'] }}" class="rounded-full w-13 " alt="">
								<p>{{$cast['name']}}</p>
								<p><strong>{{ $cast['character'] }}</strong></p>
							</div>
						</div>
					@endif
				@endforeach
			</div>
		</div>
	</div>
@endSection