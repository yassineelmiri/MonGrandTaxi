<x-master title="Mon Profile">
    <div class="container py-5 mt-5 mt-5 bg-light rounded">

        <h3>Ajouter une voiture</h3>
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

        <form method="POST" action="{{ route('chauffeurs.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label">Name Voiture</label>
                <input type="text" name="name" class="form-control" />
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Model</label>
                <input type="date" name="model" class="form-control" />
                @error('model')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Type véhicule</label>
                <input type="number" name="type" class="form-control" />
                @error('type')
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
            <div class="mb-3">
                <label class="form-label">numéro de plaque d'immatriculation</label>
                <input type="text" name="plaque" class="form-control" placeholder="00 A 0000"/>
                @error('plaque')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">image</label>
                <input type="file" name="image" class="form-control"/>
                @error('image')
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

</x-master>
