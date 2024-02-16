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
                <label class="form-label">role</label>
                <select class="form-control" name="role" required>
                    <option value="{{ old('role') }}">Select role</option>
                    <option value="passager">passager</option>
                    <option value="cheffeur">cheffeur</option>
                </select>
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
                <label class="form-label">Description</label>
                <textarea type="text" name="bio" class="form-control">{{ old('bio') }}</textarea>
            </div>
            <div class="mb-3 col-6">
                <label class="form-label">images</label>
                <input type="file" name="image" class="form-control" onchange="previewImage(event)" />
                <img id="preview" src="#" alt="Preview Image"
                    style="display: none; max-width: 30%; margin-top: 10px;" />
            </div>
            <div class="d-grid my-2">
                <button type="submit" class="btn btn-style btn-block">
                    Ajouter
                </button>
            </div>
        </form>

        <script>
            function previewImage(event) {
                var reader = new FileReader();
                reader.onload = function() {
                    var preview = document.getElementById('preview');
                    preview.src = reader.result;
                    preview.style.display = 'block';
                }
                reader.readAsDataURL(event.target.files[0]);
            }
        </script>
    </div>
</x-master>
