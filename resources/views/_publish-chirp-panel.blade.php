<div class="border border-gray-500 rounded-lg py-6 px-8 mb-8">
    <form method="POST" action="/chirps">
        @csrf

        <textarea name="body" class="w-full outline-none" placeholder="What's up birdy!" required autofocus></textarea>

        <hr class="my-4">

        <footer class="flex justify-between items-center">
            <img src="{{ auth()->user()->avatar }}" alt="User Avatar" class="rounded-full mr-2" width="40px"> 

            <button type="submit" class="bg-gray-600 text-white hover:bg-teal-500 rounded-full px-5 text-sm shadow h-10">Chirp away!</button>
        </footer>
    </form>

    @error('body')
        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
    @enderror
</div>
