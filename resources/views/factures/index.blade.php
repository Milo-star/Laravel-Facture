<h1>Gestionnaire de clients - factures</h1>
<h2>Mes Factures</h2>
<p>Dans cette section, vous pouvez voir la liste de vos factures clients</p>

<table>
    <thead>
        <tr>
            <th>id</th>
            <th>Ref</th>
            <th>titre</th>
            <th>prix</th>
            <th>TVA</th>
            <th>Total</th>
            <th>Client</th>
            <th>Modifier</th>
            <th>Supprimer</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($factures as $facture)
        <tr>
            <td>{{ $facture->id }}</td>
            <td>{{ $facture->reference }}</td>
            <td>{{ $facture->titre }}</td>
            <td>{{ $facture->price }}</td>
            <td>{{ $facture->tva }}</td>
            <td>{{ $facture->total }}</td>
            <td>{{ $facture->client }}</td>
            <td><a href="{{ route('factures.edit', $facture->id) }}">Modifier</a></td>
            <td><a href="#">Supprimer</a></td>
        </tr>
        @endforeach
    </tbody>
</table>