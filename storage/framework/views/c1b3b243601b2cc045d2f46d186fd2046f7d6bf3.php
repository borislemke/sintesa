<?php $__env->startSection('content'); ?>
    <?php foreach($data->content as $module): ?>
        <?php if($module->status): ?>
            <?php echo $__env->make('modules.' . $module->type, compact('module'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php endif; ?>
    <?php endforeach; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.' . $data->layout, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>