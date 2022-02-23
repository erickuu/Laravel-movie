<div class="flex flex-col items-center content-center justify-center  w-screen h-full text-black">
    <strong><h1 class="text-red-500 text-center text-xl mb-4">Meet the best series nomined</h1></strong>
    <div class="flex justify-center input w-screen h-fit">
        <i class="text-black fa-solid fa-magnifying-glass mt-5 mr-2"></i>
        <input wire:model.debounce.500ms="search" type="text" class="text-center w-3/4 h-14 shadow-xl border-black border-2 px-5 py-5" />
    </div>
    @if(strlen($search) >= 3)
    <div class="info-input bg-black text-white flex justify-center input w-screen h-3/5 text-sm w-3/6 rounded px-4 mt-10 overflow-y-auto ">
        <ul class="w-full">
            @foreach($searchResults as $item)
            <li class=" border-b border-gray-800">
                <a href="{{route('movies.show', $item['id'])}}" class="flex hover:bg-gray-700 px-3 py-3">
                    <img
                    src="{{ 'https://image.tmdb.org/t/p/w500/'. $item['poster_path'] }}"
                    alt=""
                    class="w-20 rounded mr-2"
                    >
                    <strong><span>{{ $item['original_title'] }}</span></strong>
                    <p class="text-white ml-2">{{ \Carbon\Carbon::parse($item['release_date'])->format('M d, Y') }}
                    </p>
                </a>
            </li>
            @endforeach
        </ul>
    </div>
    @endif
</div>