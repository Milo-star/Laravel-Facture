@vite('resources/css/app.css')
<h1 class="bg-red-800 text-white justify-center p-40 text-center text-4xl">Gestionnaire clients - Clients</h1>
<h2 class="mt-10 ml-20 text-3xl bg-gray-100 rounded-lg p-4 max-w-7xl">Créer un client</h2>
<form action="{{ route('clients.store') }}" method="POST" class="max-w-md mx-auto">
    @csrf
    <div class="mb-4 mt-10">
        <label for="Company">Société :</label>
        <input type="text" name="Company" id="Company" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" >
    </div>
    <div class="mb-4">
        <label for="phone">Téléphone :</label>
        <input type="number" name="phone" id="phone" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" >
    </div>
    <div class="mb-4">
        <label for="mail">Email :</label>
        <input type="text" name="mail" id="mail" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" >
    </div>
    <div class="mb-4">
        <label for="adress">Adresse :</label>
        <input type="text" name="adress" id="adress" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" >
    </div>
    <div class="mb-4">
        <label for="tva">TVA :</label>
        <input type="text" name="tva" id="tva" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" >
    </div>
    <div class="mb-4">
        <label for="Invoice">Client :</label>
        <input type="text" name="Invoice" id="Invoice" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" >
    </div>
    <div>
    <button type="submit" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Créer le client</button>
    </div>
</form>
