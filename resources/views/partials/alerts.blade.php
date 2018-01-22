@if (session('status'))
    <div class="fixed pin-b w-full bg-green text-white text-center p-4">
        {{ session('status') }}
    </div>
@endif