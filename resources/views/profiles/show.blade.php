<x-app>

    <header class="mb-6 relative">

        <div class="relative">

            <img src="/images/default-profile-banner.jpg" alt="Profile Banner" class="rounded-lg mb-2">
    
            <img src="{{ $user->avatar }}" alt="" class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2" style="left: 50%;" width="150px">

        </div>

        <div class="flex justify-between items-center mb-6">

            <div>
                <h2 class="font-bold text-2xl">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div class="flex">
                <a href=""
                    class="bg-teal-100 hover:bg-teal-200 border border-gray-300 rounded-full px-4 py-2 text-xs mr-2">
                    Edit Profile
                </a>
                <x-follow-button :user="$user"></x-follow-button>
            </div>

        </div>

        <p class="text-sm">
            He is a purple canary that has a somewhat large head. His temper was at first short and was often angry. His
            catchphrase is "I think I saw a kitten." As his character progressed, he became very calmer. Tweety appears
            to be an innocent little bird, sweet and extremely gentle character.
        </p>

    </header>

    @include('_timeline', [
    'chirps' => $user->chirps
    ])

</x-app>
