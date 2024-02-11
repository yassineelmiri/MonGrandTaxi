<div class="card my-2 bg-light">
    <div class="card-body">
        @auth
            @if ($canUpdate === true)
                <a class="float-end btn btn-primary btn-sm"
                    href="{{ route('publications.edit', $publication->id) }}">Modifier</a>
                <form action="{{ route('publications.destroy', $publication->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('Vouler vous vraiment supprimer la recette')"
                        class="mx-2 float-end btn btn-danger btn-sm">Supprimer</button>
                </form>
            @endif
        @endauth
        <blockquote class="blockquote mb-0">
            <div class="container bg-lenght">
                <div class="col-md-4">
                    <div class="position-relative">
                    <img class="rounded-circle" src="{{ asset('storage/' . $publication->profile->image) }}"
                        width="100px" alt="image">
                    <h3>{{ $publication->profile->name }}</h3>
                    <a href="{{ route('profiles.show', $publication->profile->id) }}" class="stretched-link"></a>
                    </div>
                </div>
            </div>
            <hr>
           <div class="col">
                <h5>Débart :  {{ $publication->lieu1 }} to --> {{ $publication->lieu2 }} </h5>
                <p> {{ $publication->body }}</p>
    
                    <footer class="blockquote-footer">
                        <br>
                        <p title="Source title">{{ $publication->prix}}Dhs</p>

                        <p title="Source title">{{ $publication->created_at->format('d-m-Y') }}</p>
                    </footer>
            </div>

        </blockquote>
    </div>
</div>
