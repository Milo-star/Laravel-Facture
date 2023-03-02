<?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
<div> 
    <h1 class="bg-red-800 p-40 text-4xl text-center text-white">Gestionnaire clients - factures</h1>
</div>

<div class="grid grid-cols-2">
    <div class="p-4 text-center">
        <h2 class="text-2xl p-3">Clients</h2>
        <img src="https://www.citizencall.fr/wp-content/uploads/2018/11/Les-10-principes-de-la-relation-client.jpeg" alt="Les 10 principes de la relation client" class="my-2 w-1/2 mx-auto">
        <a href="/clients/index" class="text-red-700 block p-3">Afficher tous les clients</a>
        <a href="/clients/create" class="text-red-700 block">Créer un client</a>
    </div>
    <div class="p-4 text-center">
        <h2 class="text-2xl p-3">Factures</h2>
        <img src="https://www.netpme.fr/wp-content/uploads/2016/11/facture.jpg" alt="Liste des factures" class="my-2 w-1/2 mx-auto">
        <a href="/clients/index" class="text-red-700 block p-3">Afficher toutes les factures</a>
        <a href="/clients/create" class="text-red-700 block">Créer une facture</a>
    </div>
</div>


<?php /**PATH /home/becode/Laravel-Facture/resources/views/welcome.blade.php ENDPATH**/ ?>