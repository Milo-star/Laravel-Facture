@vite('resources/css/app.css')
<title>Gestionnaire clients - factures</title>
<h1 class="bg-red-800 text-white justify-center p-40 text-center text-4xl">Gestionnaire clients - clients</h1>
    <div class="mt-20 mb-4">
        <h2 class="text-3xl mb-2 ml-20">Mes clients</h2>
        <p class="ml-16 mb-10">Dans cette section, vous pouvez voir la liste de vos clients</p>
    </div>

<table class="table-auto ml-16 w-3/4">
    <thead>
        <tr>
            <th class="px-4 py-2">#</th>
            <th class="px-4 py-2">Société</th>
            <th class="px-4 py-2">Téléphone</th>
            <th class="px-4 py-2">Email</th>
            <th class="px-4 py-2">Adresse</th>
            <th class="px-4 py-2">TVA</th>
            <th class="px-4 py-2">Factures</th>
            <th class="px-4 py-2">Opérations</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clients as $client)
        <tr>
            <td class="px-4 py-2 text-center">{{ $client->id }}</td>
            <td class="px-4 py-2 text-center text-red-800">{{ $client->Company }}</td>
            <td class="px-4 py-2 text-center">{{ $client->phone }}</td>
            <td class="px-4 py-2 text-center">{{ $client->mail }}</td>
            <td class="px-4 py-2 text-center">{{ $client->adress }}</td>
            <td class="px-4 py-2 text-center">{{ $client->tva }}</td>
            <td class="px-4 py-2 text-center text-red-800">{{ $client->Invoice }}</td>
            <td class="px-4 py-2 text-center text-red-800"><a href="{{ route('clients.edit', $client->id) }}">Modifier</a></td>
            <td>
            <form action="{{ route('clients.destroy', $client->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
