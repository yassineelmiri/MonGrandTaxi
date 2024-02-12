<x-master title="Publication">
    <div class="container my-5 py-5">

    <div class="text-center">
        <h3>LES Publication</h3>
        <form class="d-flex justify-content-center" action="{{ route('publications.search') }}" method="GET">
            <input type="text" name="search" placeholder="Entre un nom de recette" class="form-control me-2">
            <button type="submit" class="btn btn-primary">Rechercher</button>
        </form>
        
        <a class="btn btn-primary mt-5" href="{{ route('publications.create') }}">Créer nouvelle passager</a>
    </div>

    <div class="container row mx-auto mt-5">
        <div class="col-3">
            @foreach ($publications as $publication)
                <x-publication :canUpdate="auth()->user()->id === $publication->profile_id" :publication="$publication" />
            @endforeach
        </div>
    </div>
    
    <div class="d-flex justify-content-center mt-3">
        {{ $publications->links() }}
    </div>
    </div>
</x-master>
