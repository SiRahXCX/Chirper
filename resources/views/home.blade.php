<x-layout>
    <x-slot:pagetitle>
        Welcome
    </x-slot>
    <h1 class="text-4xl font-bold w-fit mx-auto my-16">Welcome to Chirper</h1>

    @forelse($chirps as $chirp)
        <x-chirp :chirp="$chirp" />
    @empty
        <p>No chirps yet 😢</p>
    @endforelse
</x-layout>