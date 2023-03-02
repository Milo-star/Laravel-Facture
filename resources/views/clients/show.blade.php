@vite('resources/css/app.css')

<h1 class="bg-red-800 text-white justify-center p-40 text-center text-4xl">
    Gestionnaire clients - factures
</h1>


<div class="flex flex-col items-center">
    <h2 class="font-medium px-4 p-2 text-2xl mt-5"><strong>Clients: {{$client->Invoice}}</strong></h2>
    <p class="font-medium px-4 p-2  my-2 bg-gray-100">Société: {{ $client->Company }}</p>
    <p class="font-medium px-4 p-2 my-2 bg-gray-100">Téléphone: {{ $client->phone }}</p>
    <p class="font-medium px-4 p-2 my-2 bg-gray-100">Email: {{ $client->mail }}</p>
    <p class="font-medium px-4 p-2 my-2 bg-gray-100">Adresse: {{ $client->adress }}</p>
    <p class="font-medium px-4 p-4 my-2 bg-gray-100 ">TVA: {{ $client->tva }}</p>
</div>
