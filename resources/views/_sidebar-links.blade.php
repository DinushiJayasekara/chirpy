<ul>
    <li>
        <a href="{{ route('home') }}"
            class="text-lg inline-block leading-none border border-gray-300 p-3 hover:border-gray-100 rounded font-bold text-gray-900 hover:text-gray-700 mt-4 lg:mt-0 mb-4">
            Home
        </a>
    </li>
    <li>
        <a href="/explore"
            class="text-lg inline-block leading-none border border-gray-300 p-3 hover:border-gray-100 rounded font-bold text-gray-900 hover:text-gray-700 mt-4 lg:mt-0 mb-4">
            Explore
        </a>
    </li>
    <li>
        <a href="{{ route('profile', auth()->user()) }}"
            class="text-lg inline-block leading-none border border-gray-300 p-3 hover:border-gray-100 rounded font-bold text-gray-900 hover:text-gray-700 mt-4 lg:mt-0 mb-4">
            Profile
        </a>
    </li>
    <li>
        <a href="/profiles/{{ auth()->user()->username }}/edit"
            class="text-lg inline-block leading-none border border-gray-300 p-3 hover:border-gray-100 rounded font-bold text-gray-900 hover:text-gray-700 mt-4 lg:mt-0 mb-4">
            Settings
        </a>
    </li>
    <li>
        <a class="text-lg inline-block leading-none border border-gray-300 p-3 hover:border-gray-100 rounded font-bold text-gray-900 hover:text-gray-700 mt-4 lg:mt-0 mb-4"
            href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </li>
</ul>
