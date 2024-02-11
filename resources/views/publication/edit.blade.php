<x-master title="Mon recette">
    <div class="container  py-5 mt-5">
        <h3>Modifier Voyage</h3>
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

        <form method="POST" action="{{ route('publications.update', $publication->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Date de Débart</label>
                <input type="date" name="date" class="form-control" value="{{$publication->date}}" />
                @error('date')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">lieu de Débart</label>
                <input type="text" name="lieu1" class="form-control"
                    value="{{ old('lieu1', $publication->lieu1) }}" />
                @error('lieu1')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">lieu Ar</label>
                <input type="text" name="lieu2" class="form-control"
                    value="{{ old('lieu2', $publication->lieu2) }}" />
                @error('lieu2')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea type="body" name="body" class="form-control" >{{ old('body', $publication->body) }}</textarea>
                @error('body')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Prix</label>
                <input type="range" min="0" max="1000" name="prix" class="form-control"
                    value="{{ old('prix', $publication->prix) }}" id="prixRange" />
                <span id="prixValue">0</span>DHs <!-- Ici sera affichée la valeur sélectionnée -->
                @error('prix')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="d-grid my-2">
                <button type="submit" class="btn btn-primary btn-block">
                    Modifier
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
