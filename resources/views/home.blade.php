<x-layout>
    <x-slot:pagetitle>
        Welcome
    </x-slot>

    <h1 class="text-4xl font-bold w-fit mx-auto my-16">Welcome to Chirper</h1>
    <form method="POST" action="/chirps">
        @csrf
        <div class="form-control w-full">
            <textarea  
                name="message" 
                placeholder="What's on your mind?" 
                class="textarea textarea-bordered w-full @error('message') textarea-error @enderror"
                rows="4" 
                maxlength="255"
                minlength="5"
                required
            >{{ old('message') }}</textarea>
        </div>

        @if (session('success'))
            <span class="text-success">{{ session('success') }}</span>
        @endif

        @error('message')
            <div class="label">
                <span class="label-text-alt text-error">{{ $message }}</span>
            </div>
        @enderror

        <div class="mt-4 flex items-center justify-end">
            <button type="submit" class="btn btn-primary btn-sm">
                Chirp
            </button>
        </div>
    </form>

    @forelse($chirps as $chirp)
        <x-chirp :chirp="$chirp" />
    @empty
        <p>No chirps yet 😢</p>
    @endforelse
</x-layout>