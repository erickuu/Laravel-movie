<div class="mt-8">
    <a href="{{ route('movies.show', $movies['id']) }}">
        <img src="{{'https://image.tmdb.org/t/p/w780/'.$movies['poster_path']}}" class=" hover:opacity-75 transition ease-in-out duration-150" alt="">
    </a>
    <div class="mt-2">
        <a href="{{ route('movies.show', $movies['id']) }}" class="text-lg text-black mt-2 hover:text-red-500 text-sm">{{ $movies['original_title'] }}</a>
        <div class="flex items-center text-gray-400 mt-2">
            <span class="text-600"><i class="fa-solid fa-star text-red-500 "></i></span>
            <span class="ml-1 text-black">{{ $movies['vote_average']* 10 . "%" }}</span>
            <span class="mx-2 text-black">|</span>
            <span>{{ \Carbon\Carbon::parse($movies['release_date'])->format('M d, Y') }}</span>
        </div>
    </div>
    <div class="text-black text-sm">
        @foreach($movies['genre_ids'] as $genre)
            {{ $genres->get($genre) }} @if( !$loop->last ), @endif
        @endforeach             
    </div>
</div>
