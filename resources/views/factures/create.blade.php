<form action="{{ route('factures.store') }}" method="POST">
    @csrf
    <div>
        <label for="reference">Référence :</label>
        <input type="text" name="reference" id="reference">
    </div>
    <div>
        <label for="titre">Titre :</label>
        <input type="text" name="titre" id="titre">
    </div>
    <div>
        <label for="description">Description :</label>
        <input type="text" name="description" id="description">
    </div>
    <div>
        <label for="price">Prix :</label>
        <input type="number" name="price" id="price">
    </div>
    <div>
        <label for="tva">TVA :</label>
        <input type="number" name="tva" id="tva">
    </div>
    <div>
        <label for="client">Client :</label>
        <input type="text" name="client" id="client">
    </div>
    <div>
        <button type="submit">Créer la facture</button>
    </div>
</form>
