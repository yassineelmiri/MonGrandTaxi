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
                <h5>chauffeur : {{ $publication->profile->name }}</h5>
                @php
                    $count = 0; // Initialisation du compteur
                @endphp

                @foreach ($admins as $admin)
                    @if ($admin->chauffeur_id === $chauffeur->id)
                        @php
                            $count++; // Incrémentation du compteur à chaque itération
                        @endphp
                    @endif
                @endforeach
                @if ("$count" === $chauffeur->type)
                    <div class="card bg-danger text-white">
                        <div class="card-body">
                            <h5 class="card-title">Indisponible</h5>
                            <p class="card-text">Ce type de chauffeur n'est pas disponible.</p>
                        </div>
                    </div>
                @else
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Disponible</h5>
                            <p class="card-text">Type {{ $count }} sur {{ $chauffeur->type }} disponibles.</p>
                        </div>
                    </div>
                @endif



                <footer class="blockquote-footer">
                    <br>
                    <p title="Source title">{{ $publication->prix }}Dhs</p>

                    <p title="Source title">{{ $chauffeur->created_at->format('d-m-Y') }}</p>
                    @if (auth()->user()->role === 'passager')
                        <form action="{{ route('admin.store', $chauffeur->id) }}" method="post">
                            @csrf
                            <button onclick="return confirm('Vouler vous vraiment validé le passage')"
                                class="btn btn-style" name="chauffeur_id" value="{{ $chauffeur->id }}"
                                type="submit">validé</button>
                        </form>
                    @endif

                </footer>
            </div>

        </blockquote>

    </div>
</div>
