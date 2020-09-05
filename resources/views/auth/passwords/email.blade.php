<x-master>
    <div class="container mx-auto flex justify-center">
        <div class="px-6 py-4 bg-gray-300 rounded-lg w-full max-w-sm">
            <div class="font-bold text-xl mb-4 text-center">{{ __('Reset Password') }}</div>

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="mb-5 mt-2">
                    <label for="email" class="block text-gray-700 mb-2">{{ __('E-Mail Address') }}</label>
                    <input id="email" type="email"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <span class="text-red-500 text-xs italic" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-0 text-center">
                    <button type="submit"
                        class="px-3 py-2 rounded-full text-sm uppercase bg-gray-600 text-white hover:bg-teal-500">
                        {{ __('Send Password Reset Link') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-master>
