<div class="border border-gray-300 rounded-lg">
    @forelse ($chirps as $chirp)
        @include('_chirp')
    @empty
        <p class="p-4 text-sm">No chirps yet 🤐</p>
    @endforelse

    {{ $chirps->links() }}

</div>
