<x-master title="Profiles">

    <h3>Passager</h3>
    
        <a class="btn btn-primary mt-5 " href="{{ route('Passager.create') }}">Créer nouveau passager</a>
    <div class="row my-5 container">
        @foreach ($passagers as $passager)
            {{-- <x-profile-card :passager="$passager" /> --}}
        @endforeach
    </div>
    {{ $passagers->links() }}

</x-master>