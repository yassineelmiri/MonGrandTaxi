<x-master title="Mon Profile">
    <div class="container my-5 py-5">
        <h3>Ajouter Profiles</h3>
        @if ($errors->any())
            <x-alert type="danger">
                <h6>Errors</h6>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </x-alert>
        @endif
        <button id="toggleFormButton" class="btn btn-secondary mt-3">Ajouter Chauffeur</button>
        <div id="form1">
            <form method="POST" action="{{ route('profiles.store') }}" enctype="multipart/form-data" class="row bg-light">
                @csrf
                <div class="mb-3 col-6">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}" />
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">email</label>
                    <input type="text" name="email" class="form-control" value="{{ old('email') }}" />
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">numéro de telephone</label>
                    <input type="number" name="numero" class="form-control" value="{{ old('numero') }}" />
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">Plaque D'immatricule</label>
                    <input type="text" name="plaque" class="form-control" value="{{ old('numero') }}"
                        placeholder="00-A-0000" />
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">Mot de passe</label>
                    <input type="password" name="password" class="form-control"value="{{ old('password') }}" />
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">valide le Mot de passe</label>
                    <input type="password" name="password_confirmation" class="form-control" />
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">Type de véhicule</label>
                    <input type="text" name="type" class="form-control" value="{{ old('numero') }}" />
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">Description</label>
                    <textarea type="text" name="bio" class="form-control">{{ old('bio') }}</textarea>
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">images</label>
                    <input type="file" name="image" class="form-control" />
                </div>
                <div class="d-grid my-2">
                    <button type="submit" class="btn btn-primary btn-block">
                        Ajouter Chauffeur
                    </button>
                </div>
            </form>
        </div>

        <div id="form2" style="display: none;">
            <form method="POST" action="{{ route('Passager.store')  }}" enctype="multipart/form-data"
                class="row bg-light">
                @csrf
                <div class="mb-3 col-6">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}" />
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">email</label>
                    <input type="text" name="email" class="form-control" value="{{ old('email') }}" />
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">telephone</label>
                    <input type="number" name="telephone" class="form-control" value="{{ old('telephone') }}" />
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">Historique</label>
                    <input type="text" name="historique" class="form-control" value="{{ old('historique') }}" />
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">Mot de passe</label>
                    <input type="password" name="password" class="form-control"value="{{ old('password') }}" />
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">valide le Mot de passe</label>
                    <input type="password" name="password_confirmation" class="form-control" />
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">Date de Départ</label>
                    <input type="date" name="date" class="form-control" value="{{ old('date') }}" />
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">Description</label>
                    <textarea type="text" name="bio" class="form-control">{{ old('bio') }}</textarea>
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">images</label>
                    <input type="file" name="image" class="form-control" />
                </div>
                <div class="d-grid my-2">
                    <button type="submit" class="btn btn-primary btn-block">
                        Ajouter Passager
                    </button>
                </div>
            </form>
        </div>
    </div>
    <script>
        // Fonction pour basculer entre les formulaires
        document.getElementById('toggleFormButton').addEventListener('click', function() {
            var form1 = document.getElementById('form1');
            var form2 = document.getElementById('form2');

            // Inverser la visibilité des formulaires
            if (form1.style.display === 'none') {
                form1.style.display = 'block';
                form2.style.display = 'none';
                this.textContent = 'Ajouter chauffeur';
            } else {
                form1.style.display = 'none';
                form2.style.display = 'block';
                this.textContent = 'Ajouter Passager';
            }
        });
    </script>
</x-master>
