<div class="mt-8">
    <a href="{{ route('tv.show', $tvs['id']) }}">
        <img src="{{ 'https://image.tmdb.org/t/p/w780/'.$tvs['poster_path'] }}" class=" hover:opacity-75 transition ease-in-out duration-150" alt="">
    </a>
    <div class="mt-2">
        <a href="{{ route('tv.show', $tvs['id']) }}" class="text-lg mt-2 text-black hover:text-red-500 text-sm">{{ $tvs['original_name'] }}
        </a>
        <div class="flex items-center text-black mt-2">
            <span ><i class="fa-solid fa-star text-red-500 "></i></span>
            <span class="ml-1">{{ $tvs['vote_average'] * 10 . '%'}}</span>
            <span class="mx-2">|</span>
            <span>{{ \Carbon\Carbon::parse($tvs['first_air_date'])->format('M d, Y') }}</span>
        </div>
    </div>

    <div class="text-black text-sm">
    </div>
</div>    