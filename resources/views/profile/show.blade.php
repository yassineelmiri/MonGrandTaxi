<x-master title="Profiles">
    <div class="container my-5 py-5">
    <h3>Profiles</h3>
    <div class="container-fluid">
        <div class="row">
            <div class="card my-4 py-4">
                <img class="card-img-top w-25 mx-auto" src="{{ asset('storage/' . $profile->image) }}" alt="image" />
                <div class="card-body text-center">
                    <h4 class="card-title">#{{ $profile->id }} {{ $profile->name }}</h4>

                    <p class="card-text">{{ $profile->created_at->format('d-m-Y') }}</p>

                    <p class="card-text">Email : <a href="mailto:{{ $profile->email }}">{{ $profile->email }}</a></p>
                    <p class="card-text">{{ $profile->bio }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <h3>Les passager</h3>
        <div class="row ">
            @foreach ($profile->publications as $publication)
                <x-publication :canUpdate="auth()->user()->id === $publication->profile_id" :publication="$publication" />
            @endforeach
        </div>
        <h3>Les passager</h3>
        <div class="row ">
            
            @foreach ($chauffeurs as $chauffeur)
                <x-chauffeur :canUpdate="auth()->user()->id === $chauffeur->profile_id" :chauffeur="$chauffeur" />
            @endforeach
        </div>

    </div>
    </div>

</x-master>
