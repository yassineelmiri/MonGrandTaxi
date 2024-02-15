<x-master title="Mon Profile">
    <div class="container py-5 mt-5 bg-light rounded">
        <h3 class="mb-4">Ajouter Voyage</h3>
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

        <form class="bg-gray" method="POST" action="{{ route('publications.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="date" class="form-label">Date de Départ</label>
                <input type="date" name="date" class="form-control" id="date" />
                @error('date')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="lieu1" class="form-label">Lieu de Départ</label>
                <input type="text" name="lieu1" class="form-control" id="lieu1" />
                @error('lieu1')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="lieu2" class="form-label">Lieu Arrivée</label>
                <input type="text" name="lieu2" class="form-control" id="lieu2" />
                @error('lieu2')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="body" class="form-control" id="description" rows="3">{{ old('body') }}</textarea>
                @error('body')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="prix" class="form-label">Prix</label>
                <input type="range" min="0" max="1000" value="0" name="prix" class="form-range" id="prix" />
                <span id="prixValue">0</span>DHs 
                @error('prix')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-grid my-2">
                <button type="submit" class="btn btn-success btn-block">
                    Ajouter
                </button>
            </div>
        </form>
    </div>

    <script>
        const prixRange = document.getElementById('prix');
        const prixValue = document.getElementById('prixValue');

        prixRange.addEventListener('input', function() {
            prixValue.textContent = prixRange.value;
        });
    </script>
</x-master>
