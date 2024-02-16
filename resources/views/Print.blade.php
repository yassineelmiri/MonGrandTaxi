<x-master title="Printe">
    <div class="container my-5 py-5">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1 class="card-title">Ticket</h1>
                    <a href="{{ route('homePage') }}" class="btn btn-style" onclick="printPage()">Imprimer</a>
                </div>
                <table class="table">
                    <h5>Débart : {{$publication->lieu1}} | Arrivé : {{$publication->lieu2}}</h5>
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Image</th>
                            <th scope="col">Name</th>
                            <th scope="col">Model</th>
                            <th scope="col">Nombre de place</th>
                            <th scope="col">Description</th>
                            <th scope="col">Plaque</th>
                            <th scope="col">Chauffeur</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#{{ $chauffeur->id }}</td>
                            <td>
                                <div class="rounded-circle" style="width: 80px; height: 80px; overflow: hidden;">
                                    <img class="w-100" src="{{ asset('storage/' . $chauffeur->image) }}" alt="image">
                                </div>
                            </td>
                            <td>{{ $chauffeur->name }}</td>
                            <td>{{ $chauffeur->model }}</td>
                            <td>{{ $chauffeur->type }}</td>
                            <td>{{ $chauffeur->body }}</td>
                            <td>{{ $chauffeur->plaque }}</td>
                            <td>yassine</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <h3 class="card">Prix : {{$publication->prix}}</h3>
    </div>
</x-master>

<script>
    function printPage() {
        window.print();
    }
</script>
