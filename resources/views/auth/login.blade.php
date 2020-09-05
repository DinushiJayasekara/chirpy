<x-master>
    <div class="container mx-auto flex justify-center">

        <div class="px-6 py-4 bg-gray-300 rounded-lg w-full max-w-sm">

            <div class="font-bold text-xl mb-4 text-center">{{ __('Login') }}</div>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div>
                    <label for="email" class="block text-gray-700 mb-2">{{ __('E-Mail Address') }}</label>
                    <input id="email" type="email"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" autocomplete="email" autofocus>
                    @error('email')
                    <span class="text-red-500 text-xs italic" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-1">
                    <label for="password" class="block text-gray-700 mb-2 mt-3">{{ __('Password') }}</label>
                    <input id="password" type="password"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('password') is-invalid @enderror"
                        name="password" autocomplete="current-password">
                    @error('password')
                    <span class="text-red-500 text-xs italic" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-5 mt-2">
                    <input class="text-gray-800 text-xs" type="checkbox" name="remember" id="remember"
                        {{ old('remember') ? 'checked' : '' }}>
                    <label class="text-gray-800 text-xs" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>

                <div class="mb-0 text-center">
                    <button type="submit"
                        class="px-3 py-2 rounded-full text-sm uppercase bg-gray-600 text-white hover:bg-teal-500">
                        Sign In
                    </button>
                </div>

                <div class="mb-0 mt-4 text-center">
                    @if (Route::has('password.request'))
                        <a class="ml-2 inline-block align-baseline text-sm text-blue-500 hover:text-blue-800 text-xs"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif

                    <a class="ml-2 inline-block align-baseline text-sm text-blue-500 hover:text-blue-800 text-xs">|</a>
                    <a class="ml-2 inline-block align-baseline text-sm text-blue-500 hover:text-blue-800 text-xs"
                        href="{{ route('register') }}">
                        Create New Account
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-master>
