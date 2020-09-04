@extends('layouts.app')

@section('sidebar')
    @include('_sidebar-links')
@endsection

@section('content')
    <header class="mb-6 relative">
        <img src="/images/default-profile-banner.jpg" alt="Profile Banner" class="rounded-lg mb-2">

        <div class="flex justify-between items-center mb-4">
            <div>
                <h2 class="font-bold text-2xl">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div>
                <a href="" class="bg-teal-100 border border-gray-300 rounded-full px-4 py-2 text-xs mr-2">Edit Profile</a>
                <a href="" class="bg-teal-600 rounded-full px-4 py-2 shadow text-white text-xs">Follow Me</a>
            </div>
        </div>

        <p class="text-sm">
            He is a purple canary that has a somewhat large head. His temper was at first short and was often angry. His
            catchphrase is "I think I saw a kitten." As his character progressed, he became very calmer. Tweety appears to
            be an innocent little bird, sweet and extremely gentle character.
        </p>

        <img src="{{ $user->avatar }}" alt="" class="rounded-full mr-2 absolute"
            style="width: 150px; left: calc(50% - 75px); top: 43%;">

    </header>

    <hr>

    @include('_timeline', [
    'chirps' => $user->chirps
    ])
@endsection

@section('friends-list')
    @include('_friends-list')
@endsection
