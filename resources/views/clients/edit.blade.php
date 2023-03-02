@vite('resources/css/app.css')
<h1 class="bg-red-800 text-white justify-center p-40 text-center text-4xl">Gestionnaire clients - Modifier</h1>
<h1 class="mt-20 mb-4 ml-20 text-3xl bg-gray-100 rounded-lg p-4 max-w-7xl">Modifier client "{{ $client->Company }}"</h1>

<form action="{{ route('clients.update', ['id' => $client->id]) }}" method="POST">
    @csrf
    @method('PUT')
          <div class="flex flex-col gap-4 mb-4 ml-20 max-w-7xl">
            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mb-4" id="Company" name="Company" value="{{ $client->Company }}">
            <input type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mb-4" id="phone" name="phone" value="{{ $client->phone }}">
            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mb-4" id="mail" name="mail" value="{{ $client->mail }}">
            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mb-4" id="adress" name="adress" value="{{ $client->adress }}">
            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mb-4" id="tva" name="tva" value="{{ $client->tva }}">
            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mb-4 bg-gray-200" id="Invoice" name="Invoice" value="{{ $client->Invoice }}" readonly>
        </div>
        <div class="flex items-center justify-between ml-16">
            <button class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" class="btn btn-primary">Enregistrer</button>
        </div>
    </form>
