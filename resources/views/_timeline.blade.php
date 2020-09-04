<div class="border border-gray-300 rounded-lg">
    @foreach ($chirps as $chirp)
        @include('_chirp')
    @endforeach
</div>