@if (session()->has('message'))
    <div class="bg-success p-2 text-dark bg-opacity-10 mb-4 text-white text-center">
        <h3>
            {{ session('message') }}
        </h3>
    </div>
@endif