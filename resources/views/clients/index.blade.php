<h1>Gestionnaire de clients - factures</h1>
<h2>Mes Clients</h2>
<p>Dans cette section, vous pouvez voir la liste de tous vos clients</p>

<table>
    <thead>
        <tr>
            <th>id</th>
            <th>Société</th>
            <th>Téléphone</th>
            <th>Email</th>
            <th>Adresse</th>
            <th>TVA</th>
            <th>Factures</th>
            <th>Opérations</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clients as $client)
        <tr>
            <td>{{ $client->id }}</td>
            <td>{{ $client->Company }}</td>
            <td>{{ $client->phone }}</td>
            <td>{{ $client->mail }}</td>
            <td>{{ $client->adress }}</td>
            <td>{{ $client->tva }}</td>
            <td>{{ $client->Invoice }}</td>
            <td><a href="{{ route('clients.edit', $client->id) }}">Modifier</a></td>
            <td>
            <form action="{{ route('clients.destroy', $client->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
