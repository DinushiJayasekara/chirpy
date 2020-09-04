<form action="/profiles/{{ $user->name }}/follow" method="post">
    @csrf
    <button type="submit"
        class="bg-teal-600 hover:bg-teal-700 rounded-full px-4 py-2 shadow text-white text-xs">
        {{ auth()->user()->isFollowing($user)
            ? 'Unfollow Me'
            : 'Follow Me' }}
    </button>
</form>