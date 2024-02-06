@props(['users'])
<div>
    @if (count($users) > 0)
        <h3>les recette</h3>
        <table border='1' id="example" width="100%">
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Content</th>
            </tr>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user['id'] }}</td>
                    <td>{{ $user['nom'] }}</td>
                    <td>{{ $user['content'] }}</td>
                </tr>
            @endforeach
        </table>
    @else
        pas des users sur l'instant
    @endif
</div>
