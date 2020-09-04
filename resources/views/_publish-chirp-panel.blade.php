<div class="border border-teal-300 rounded-lg py-6 px-8 mb-8">
    <form method="POST" action="/chirps">
        @csrf

        <textarea name="body" class="w-full outline-none" placeholder="What's up birdy!"></textarea>

        <hr class="my-4">

        <footer class="flex justify-between">
            <img src="{{ auth()->user()->avatar }}" alt="User Avatar" class="rounded-full mr-2" width="50px"> 

            <button type="submit" class="bg-teal-400 rounded-full px-3 shadow text-white">Chirp chirp!</button>
        </footer>
    </form>

    @error('body')
        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
    @enderror
</div>
