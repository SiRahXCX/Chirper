<x-layout>
    <x-slot:pagetitle>Quotes</x-slot:pagetitle>
    <p class="text-3xl font-bold">My Quotes</p>
    @forelse ($quotes as $quote)
        <div class="border rounded p-2 mt-4 mb-2">
            <blockquote>
                "{{ $quote->quote }}"
            </blockquote>
        </div>
    @empty
        <pre>You don't have any quotes yet...</pre>
    @endforelse
</x-layout>