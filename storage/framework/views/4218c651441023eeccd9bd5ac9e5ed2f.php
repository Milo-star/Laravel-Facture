<?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
<title>Gestionnaire clients - factures</title>
<h1 class="bg-red-800 text-white justify-center p-40 text-center text-4xl">Gestionnaire clients - factures</h1>
    <div class="mt-20 mb-4">
        <h2 class="text-3xl mb-2 ml-20">Mes factures</h2>
        <p class="ml-16 mb-10">Dans cette section, vous pouvez voir la liste de vos factures clients</p>
    </div>

    <table class="table-auto ml-16 w-3/4">
        <thead>
            <tr>
                <th class="px-4 py-2">#</th>
                <th class="px-4 py-2">Réf</th>
                <th class="px-4 py-2">Titre</th>
                <th class="px-4 py-2">Prix</th>
                <th class="px-4 py-2">TVA</th>
                <th class="px-4 py-2">Total</th>
                <th class="px-4 py-2">Client</th>
                <th class="px-4 py-2">Description</th>
                <th class="px-4 py-2">Modifier</th>
                <th class="px-4 py-2">Supprimer</th>
            </tr>
        </thead>
    <tbody>
        <?php $__currentLoopData = $factures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $facture): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
        <td class="px-4 py-2 text-center"><?php echo e($facture->id); ?></td>
        <td class="px-4 py-2 text-center text-red-800 font-bold"><?php echo e($facture->reference); ?></td>
        <td class="px-4 py-2 text-center"><?php echo e($facture->titre); ?></td>
        <td class="px-4 py-2 text-center"><?php echo e($facture->price); ?>€</td>
        <td class="px-4 py-2 text-center"><?php echo e($facture->tva); ?>%</td>
        <td class="px-4 py-2 text-center"><?php echo e($facture->total); ?>€</td>
        <td class="px-4 py-2 text-center text-red-800"><?php echo e($facture->client); ?></td>
        <td class="px-4 py-2 text-center"><?php echo e($facture->description); ?></td>
        <td class="px-4 py-2 text-center text-red-800"><a href="<?php echo e(route('factures.edit', $facture->id)); ?>">Modifier</a></td>
            <td>
                <form action="<?php echo e(route('factures.destroy', $facture->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded">Supprimer</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php /**PATH /home/becode/Laravel-Facture/resources/views/factures/index.blade.php ENDPATH**/ ?>