<x-layout>
    <x-slot:title>
        Welcome
    </x-slot>
    <h1 class="text-4xl font-bold w-fit mx-auto my-16">Welcome to Chirper</h1>

    @foreach($chirps as $chirp)
    <div class="card card-border bg-base-100 w-96 mb-8">
        <div class="card-body">
            <div>{{ $chirp['author'] }}</div>
            <div>{{ $chirp['message'] }}</div>
            <div>{{ $chirp['time'] }}</div>
        </div>
    </div>
    @endforeach
</x-layout>