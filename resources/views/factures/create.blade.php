@vite('resources/css/app.css')
<h1 class="bg-red-800 text-white justify-center p-40 text-center text-4xl">Gestionnaire clients - factures</h1>
<h2 class="mt-10 ml-20 text-3xl bg-gray-100 rounded-lg p-4 max-w-7xl">Créer votre facture</h2>
<form action="{{ route('factures.store') }}" method="POST" class="max-w-md mx-auto">
    @csrf
    <div class="mb-4 mt-10">
        <label for="reference">Référence :</label>
        <input type="text" name="reference" id="reference" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
    </div>
    <div class="mb-4">
        <label for="titre">Titre :</label>
        <input type="text" name="titre" id="titre" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" >
    </div>
    <div class="mb-4">
        <label for="description">Description :</label>
        <input type="text" name="description" id="description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" >
    </div>
    <div class="mb-4">
        <label for="price">Prix :</label>
        <input type="number" name="price" id="price" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" >
    </div>
    <div class="mb-4">
        <label for="tva">TVA :</label>
        <input type="number" name="tva" id="tva" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" >
    </div>
    <div class="mb-4">
        <label for="client">Client :</label>
        <input type="text" name="client" id="client" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" >
    </div>
    <div class="mb-4">
        <button type="submit" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Créer la facture</button>
    </div>
</form>
