<div class="flex p-4 border-b border-b-gray-400">
    <div class="mr-2 flex-shrink-0">
        <a href="{{ route('profile', $chirp->user) }}">
            <img src="{{ $chirp->user->avatar }}" alt="Avatar" class="rounded-full mr-2" width="55px">
        </a>
    </div>

    <div>
        <a href="{{ route('profile', $chirp->user) }}">
            <h5 class="font-bold mb-4">{{ $chirp->user->name }}</h5>
        </a>
        <p class="text-sm">
            {{ $chirp->body }}
        </p>
    </div>
</div>
