@vite('resources/css/app.css')
<h1 class="bg-red-800 text-white justify-center p-40 text-center text-4xl">Gestionnaire clients - factures</h1>
    <div class="mt-20 mb-4">
        <h2 class="text-3xl mb-2 ml-20">Mes factures</h2>
        <p class="ml-16 mb-10">Dans cette section, vous pouvez voir la liste de vos factures clients</p>
    </div>

    <table class="table-auto ml-16 w-3/4">
        <thead>
            <tr>
                <th class="px-4 py-2">#</th>
                <th class="px-4 py-2">Réf</th>
                <th class="px-4 py-2">Titre</th>
                <th class="px-4 py-2">Prix</th>
                <th class="px-4 py-2">TVA</th>
                <th class="px-4 py-2">Total</th>
                <th class="px-4 py-2">Client</th>
                <th class="px-4 py-2">Description</th>
                <th class="px-4 py-2">Modifier</th>
                <th class="px-4 py-2">Supprimer</th>
            </tr>
        </thead>
    <tbody>
        @foreach ($factures as $facture)
        <tr>
        <td class="px-4 py-2 text-center">{{ $facture->id }}</td>
        <td class="px-4 py-2 text-center text-red-800 font-bold">{{ $facture->reference }}</td>
        <td class="px-4 py-2 text-center">{{ $facture->titre }}</td>
        <td class="px-4 py-2 text-center">{{ $facture->price }}€</td>
        <td class="px-4 py-2 text-center">{{ $facture->tva }}%</td>
        <td class="px-4 py-2 text-center">{{ $facture->total }}€</td>
        <td class="px-4 py-2 text-center text-red-800">{{ $facture->client }}</td>
        <td class="px-4 py-2 text-center">{{ $facture->description }}</td>
        <td class="px-4 py-2 text-center text-red-800"><a href="{{ route('factures.edit', $facture->id) }}">Modifier</a></td>
            <td>
                <form action="{{ route('factures.destroy', $facture->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
