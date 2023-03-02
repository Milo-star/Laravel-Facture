@vite('resources/css/app.css')
<title>Gestionnaire clients - Modifier</title>
<h1 class="bg-red-800 text-white justify-center p-40 text-center text-4xl">Gestionnaire clients - Modifier</h1>
<h1 class="mt-20 mb-4 ml-20 text-3xl bg-gray-100 rounded-lg p-4 max-w-7xl">Modifier facture "{{ $facture->client }} {{$facture->reference}}"</h1>

<form action="{{ route('factures.update', ['id' => $facture->id]) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="hidden" name="_method" value="PUT" >

        <div class="flex flex-col gap-4 mb-4 ml-20 max-w-7xl">
            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mb-4" id="titre" name="titre" value="{{ $facture->titre }}">
            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mb-4" id="description" name="description" value="{{ $facture->description }}">
            <input type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mb-4" id="tva" name="tva" value="{{ $facture->tva }}">
            <input type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mb-4" id="price" name="price" value="{{ $facture->price }}">
        </div>
        <div class="flex items-center justify-between ml-16">
            <button class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" class="btn btn-primary">Enregistrer</button>
        </div>
    </form>