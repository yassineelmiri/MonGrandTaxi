<x-master title="Profiles">
    <div class="container my-5 py-5">

    <h3>Profiles</h3>
    
        <a class="btn btn-primary mt-5 " href="{{ route('profiles.create') }}">Créer nouveau compte</a>
    <div class="row my-5 container">
        @foreach ($profiles as $profile)
            <x-profile-card :profile="$profile" />
        @endforeach
    </div>
    {{ $profiles->links() }}
    </div>
</x-master>
