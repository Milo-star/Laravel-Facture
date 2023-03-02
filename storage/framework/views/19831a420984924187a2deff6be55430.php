<?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
<div> 
    <h1 class="bg-red-600">Gestionnaire clients - factures</h1>
</div>
<div>
    <div>
        <h2>Clients</h2>
        <a href="/clients/index">Afficher tous les client</a>
        <a href="/clients/create">Créer un client</a>
    </div>
    <div>
        <h2>Factures</h2>
        <a href="/factures/index">Afficher toutes les factures</a>
        <a href="/factures/create">Créer une nouvelle factures</a>
    </div>
</div>
<?php /**PATH /home/becode/Laravel-Facture/resources/views/welcome.blade.php ENDPATH**/ ?>