@extends('layouts.main')
@section('content')	

	@foreach($popularMovies as $movies) 
	    @if($loop->index < 2)        
	      <x-header-card :movies="$movies"/>   
	    @endif
	@endforeach
	<section class="flex flex-col items-center justify-center w-screen h-screen text-black">
		<livewire:search-dropdown/>
	</section>

	<section class="container mx-auto px-4 pt-16">
		<div class="popular-movies">
			<h2 class="uppercase tracking-wider text-red-500 text-lg font-semibold ">Popular Movies</h2>
			<div class=" text-black grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-6 gap-8">
				@foreach($popularMovies as $movies)
					<x-movie-card :movies="$movies" :genres="$genres"/>
				@endforeach				
			</div>
		</div>

		<hr>
		<div class="now-playing pt-16">
			<h2 class="uppercase tracking-wider text-red-500 text-lg font-semibold ">Tv Show and Series</h2>
			<div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-6 gap-8">
				@foreach($tv as $tvs)
					<x-tv-card :tvs="$tvs"/>
				@endforeach				
			</div>
		</div>
	</section>
@endsection  