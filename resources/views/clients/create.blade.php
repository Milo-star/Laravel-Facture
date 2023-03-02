<form action="{{ route('clients.store') }}" method="POST">
    @csrf
    <div>
        <label for="Company">Company :</label>
        <input type="text" name="Company" id="Company">
    </div>
    <div>
        <label for="phone">Phone :</label>
        <input type="number" name="phone" id="phone">
    </div>
    <div>
        <label for="mail">Mail :</label>
        <input type="text" name="mail" id="mail">
    </div>
    <div>
        <label for="adress">Adress :</label>
        <input type="text" name="adress" id="adress">
    </div>
    <div>
        <label for="tva">TVA :</label>
        <input type="text" name="tva" id="tva">
    </div>
    <div>
        <label for="Invoice">Invoice :</label>
        <input type="text" name="Invoice" id="Invoice">
    </div>
    <div>
        <button type="submit">Créer la facture</button>
    </div>
</form>
