@props(['chirp'])

<div class="card card-border bg-base-100 w-96 mb-8">
    <div class="card-body">
        <div>
            @if ($chirp->user)
                <img src="https://picsum.photos/200/300" alt="{{ $chirp->user->name }}'s avatar" />
            @else
                <p>Anonymous</p>
            @endif
        </div>
        {{-- <div>{{ $chirp->user ? $chirp->user->name : 'Anonymous'}}</div> --}}
        <div>{{ $chirp->message }}</div>
        <div>{{ $chirp->created_at->diffForHumans() }}</div>
    </div>
</div>