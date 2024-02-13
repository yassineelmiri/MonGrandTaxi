<div class="card bg-light mx-2 col col-lg-3">
    <div class="card-body">
        @auth
            @if ($canUpdate === true)
                <a class="float-end btn btn-primary btn-sm"
                    href="{{ route('publications.edit', $chauffeur->id) }}">Modifier</a>
                <form action="{{ route('publications.destroy', $chauffeur->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('Vouler vous vraiment supprimer la recette')"
                        class="mx-2 float-end btn btn-danger btn-sm">Supprimer</button>
                </form>
            @endif
        @endauth
        <blockquote class="blockquote mb-0">
            <div class="container bg-lenght">
                <div class="">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{ asset('storage/' . $chauffeur->image) }}" width="100px"
                            alt="image">
                        <h3>{{ $chauffeur->name }}</h3>
                        <a href="{{ route('profiles.show', $chauffeur->id) }}" class="stretched-link"></a>
                    </div>
                </div>
            </div>
            <hr>
            <div class="col">
                <h5>Débart : {{ $chauffeur }} to --> {{ $chauffeur->type }} </h5>
                <p> {{ $chauffeur }}</p>

                <footer class="blockquote-footer">
                    <br>
                    <p title="Source title">{{ $chauffeur->prix }}Dhs</p>

                    <p title="Source title">{{ $chauffeur->created_at->format('d-m-Y') }}</p>
                    @if (auth()->user()->role === 'passager')
                        <form action="{{ route('publications.destroy', $chauffeur->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Vouler vous vraiment validé le passage')"
                                class="btn btn-style">validé</button>
                        </form>
                    @endif

                </footer>
            </div>

        </blockquote>
    </div>
</div>
