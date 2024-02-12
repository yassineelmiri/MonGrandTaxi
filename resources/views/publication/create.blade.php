<x-master title="Mon Profile">
    <div class="container py-5 mt-5">

        <h3>Ajouter Voyage</h3>
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

        <form method="POST" action="{{ route('publications.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label">Date de Débart</label>
                <input type="date" name="date" class="form-control" />
                @error('date')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">lieu de Débart</label>
                <input type="text" name="lieu1" class="form-control" />
                @error('lieu1')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">lieu Ar</label>
                <input type="text" name="lieu2" class="form-control" />
                @error('lieu2')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea type="body" name="body" class="form-control">{{ old('body') }}</textarea>
                @error('body')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            {{-- <div class="mb-3 col-6">
                <label class="form-label">chauffeur</label>
                <select class="form-control" name="cheffeur" required>
                    <option value="{{ old('role') }}">Select chauffeur</option>
                    @foreach ($profiles as $profile)
                        @if ($profile->role === 'cheffeur')
                            <option  value="{{$profile->id}}">{{ $profile->name }}</option>
                        @endif
                    @endforeach
                </select>
                @error('cheffeur')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div> --}}
            <div class="mb-3">
                <label class="form-label">Prix</label>
                <input type="range" min="0" max="1000" value="0" name="prix" class="form-control"
                    id="prixRange" />
                <span id="prixValue">0</span>DHs <!-- Ici sera affichée la valeur sélectionnée -->
                @error('prix')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-grid my-2">
                <button type="submit" class="btn btn-primary btn-block">
                    Ajouter
                </button>
            </div>
        </form>


    </div>
    <script>
        const prixRange = document.getElementById('prixRange');
        const prixValue = document.getElementById('prixValue');

        prixRange.addEventListener('input', function() {
            prixValue.textContent = prixRange.value;
        });
    </script>

</x-master>
