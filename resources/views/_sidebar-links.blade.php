<ul>
    <li>
        <a href="{{ route('home') }}"
            class="text-lg inline-block leading-none px-3 pb-3 hover:border-gray-100 rounded font-bold text-gray-900 hover:text-gray-700 lg:mt-0 mb-1">
            Home
        </a>
    </li>
    <li>
        <a href="/explore"
            class="text-lg inline-block leading-none p-3 hover:border-gray-100 rounded font-bold text-gray-900 hover:text-gray-700 mt-2 lg:mt-0 mb-1">
            Explore
        </a>
    </li>
    <li>
        <a href="{{ route('profile', auth()->user()) }}"
            class="text-lg inline-block leading-none p-3 hover:border-gray-100 rounded font-bold text-gray-900 hover:text-gray-700 mt-2 lg:mt-0 mb-1">
            Profile
        </a>
    </li>
    <li>
        <a href="/profiles/{{ auth()->user()->username }}/edit"
            class="text-lg inline-block leading-none p-3 hover:border-gray-100 rounded font-bold text-gray-900 hover:text-gray-700 mt-2 lg:mt-0 mb-1">
            Settings
        </a>
    </li>
    <li>
        <a class="text-lg inline-block leading-none p-3 hover:border-gray-100 rounded font-bold text-gray-900 hover:text-gray-700 mt-2 lg:mt-0 mb-1"
            href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </li>
</ul>
