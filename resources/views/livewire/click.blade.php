<div class="container d-flex flex-column align-items-center justify-content-center min-vh-100">
    <h1 class="fw-bold mb-4">Click the button to see the magic!</h1>

    <div class="d-flex gap-3 mb-4">
        <button wire:click="increment" class="btn btn-primary">
            Increment
        </button>

        <button wire:click="decrement" class="btn btn-danger">
            Decrement
        </button>
    </div>

    <p class="mb-4 fs-5">You have clicked the button {{ $count }} times.</p>

    <div class="card w-100" style="max-width: 500px;">
        <div class="card-header bg-secondary text-white">
            <h2 class="fs-5 fw-semibold mb-0">Click History:</h2>
        </div>
        <div class="card-body">
            @if(count($clickHistory) > 0)
                <ul class="list-group">
                    @foreach($clickHistory as $index => $history)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span>{{ $index + 1 }}. {{ $history['action'] }} at:</span>
                            <span class="badge bg-secondary rounded-pill">{{ $history['timestamp'] }}</span>
                        </li>
                    @endforeach
                </ul>
            @else
                <p class="text-muted mb-0">No click history yet.</p>
            @endif
        </div>
    </div>
</div>
