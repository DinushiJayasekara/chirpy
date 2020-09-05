<x-app>
    <form action="{{ $user->path() }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="mb-6">

            <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">Name</label>
            <input type="text"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('name') is-invalid @enderror"
                name="name" id="name" value="{{ $user->name }}">
            @error('name')
            <p class="text-red-500 text-xs mt-2 italic">{{ $message }}</p>
            @enderror

        </div>

        <div class="mb-6">

            <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">Username</label>
            <input type="text"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('username') is-invalid @enderror"
                name="username" id="username" value="{{ $user->username }}">
            @error('username')
            <p class="text-red-500 text-xs mt-2 italic">{{ $message }}</p>
            @enderror

        </div>

        <div class="mb-6">

            <label for="avatar" class="block mb-2 uppercase font-bold text-xs text-gray-700">Avatar</label>

            <div class="flex">
                <input type="file"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('avatar') is-invalid @enderror"
                    name="avatar" id="avatar" value="{{ $user->avatar }}">
                <img src="{{ $user->avatar }}" alt="Your Avatar" width="40px" class="rounded-full mx-3 py-1">
            </div>

            @error('avatar')
            <p class="text-red-500 text-xs mt-2 italic">{{ $message }}</p>
            @enderror

        </div>

        <div class="mb-6">

            <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">Email</label>
            <input type="email"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('email') is-invalid @enderror"
                name="email" id="email" value="{{ $user->email }}">
            @error('email')
            <p class="text-red-500 text-xs mt-2 italic">{{ $message }}</p>
            @enderror

        </div>

        <div class="mb-6">

            <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">Password</label>
            <input type="password"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('password') is-invalid @enderror"
                name="password" id="password">
            @error('password')
            <p class="text-red-500 text-xs mt-2 italic">{{ $message }}</p>
            @enderror

        </div>

        <div class="mb-6">

            <label for="password_confirmation" class="block mb-2 uppercase font-bold text-xs text-gray-700">Password
                Confirmation</label>
            <input type="password"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('password_confirmation') is-invalid @enderror"
                name="password_confirmation" id="password_confirmation">
            @error('password_confirmation')
            <p class="text-red-500 text-xs mt-2 italic">{{ $message }}</p>
            @enderror

        </div>

        <div class="mb-6 items-center">
            <button type="submit"
                class="px-5 py-2 rounded-full text-sm uppercase bg-teal-500 text-white hover:bg-teal-600 mr-4">Edit
                Profile</button>

            <a href="{{ $user->path() }}"
                class="bg-gray-100 hover:bg-teal-100 border border-gray-300 rounded-full px-4 py-2 text-sm">
                Cancel
            </a>
        </div>

    </form>
</x-app>
