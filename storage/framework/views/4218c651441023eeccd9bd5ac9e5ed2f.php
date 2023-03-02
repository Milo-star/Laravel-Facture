<h1>Gestionnaire de clients - factures</h1>
<h2>Mes Factures</h2>
<p>Dans cette section, vous pouvez voir la liste de vos factures clients</p>

<table>
    <thead>
        <tr>
            <th>id</th>
            <th>Ref</th>
            <th>titre</th>
            <th>prix</th>
            <th>TVA</th>
            <th>Total</th>
            <th>Client</th>
            <th>Modifier</th>
            <th>Supprimer</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $factures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $facture): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($facture->id); ?></td>
            <td><?php echo e($facture->reference); ?></td>
            <td><?php echo e($facture->titre); ?></td>
            <td><?php echo e($facture->price); ?>€</td>
            <td><?php echo e($facture->tva); ?>%</td>
            <td><?php echo e($facture->total); ?>€</td>
            <td><?php echo e($facture->client); ?></td>
            <td><a href="<?php echo e(route('factures.edit', $facture->id)); ?>">Modifier</a></td>
            <td>
                <form action="<?php echo e(route('factures.destroy', $facture->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit">Supprimer</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php /**PATH /home/becode/Laravel-Facture/resources/views/factures/index.blade.php ENDPATH**/ ?>