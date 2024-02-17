<div class="card bg-light mx-2 col col-lg-3">
    <div class="card-body">
        <blockquote class="blockquote mb-0">
            <div class="container bg-lenght">
                <div>
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
                <p>Débart : {{ $publication->lieu1 }} to-> {{ $publication->lieu2 }} </p>
                <p> {{ $publication->body }}</p>
                <footer class="blockquote-footer">
                    <br>
                    <p title="Source title">{{ $publication->prix }}Dhs</p>
                    <p title="Source title">{{ date('d-m-Y', strtotime($publication->date)) }}</p>
                    @if (auth()->user()->role === 'passager')
                        <a href="{{ route('profiles.show', $publication->profile->id) }}" class="btn btn-style">Voir
                            détail</a>
                    @endif

                </footer>
                @if (auth()->user()->id === $publication->profile_id )
                    <a class="float-end btn btn-primary btn-sm"
                        href="{{ route('publications.edit', $publication->id) }}">Modifier</a>
                    <form action="{{ route('publications.destroy', $publication->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Vouler vous vraiment supprimer la recette')"
                            class="mx-2 float-end btn btn-danger btn-sm">Supprimer</button>
                    </form>
                @endif
            </div>

        </blockquote>
    </div>
</div>
