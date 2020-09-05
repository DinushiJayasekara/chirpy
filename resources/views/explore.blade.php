<x-app>
    <div class="flex justify-center">
        <div class="text-gray-700 text-center px-4 pb-2">
            <h1 class="text-3xl text-gray-700 mb-2">
                Explore other Chirpies!
            </h1>
        </div>
    </div>

    <div>
        @for ($i = 0; $i < count($users); $i += 2)
            <div class="flex mb-4">
                {{-- @if (auth()->user()->id != $users[$i]->id) --}}
                    <div class="w-1/2 h-12 mt-3">
                        <a href="{{ $users[$i]->path() }}" class="flex items-center mb-5">
                            <img src="{{ $users[$i]->avatar }}" alt="{{ $users[$i]->username }}'s avatar" width="60"
                                class="mr-4 rounded">

                            <div>
                                <h4 class="font-bold italic text-sm">{{ '@' . $users[$i]->name }}</h4>
                            </div>
                        </a>
                    </div>
                {{-- @endif --}}

                {{-- @if (auth()->user()->id != $users[$i + 1]->id) --}}
                    <div class="w-1/2 h-12 mt-3">
                        <a href="{{ $users[$i + 1]->path() }}" class="flex items-center mb-5">
                            <img src="{{ $users[$i + 1]->avatar }}" alt="{{ $users[$i + 1]->username }}'s avatar"
                                width="60" class="mr-4 rounded">

                            <div>
                                <h4 class="font-bold italic text-sm">{{ '@' . $users[$i + 1]->name }}</h4>
                            </div>
                        </a>
                    </div>
                {{-- @endif --}}
            </div>

        @endfor

        {{ $users->links() }}
    </div>
</x-app>
