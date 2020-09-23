
    <div class="row align-content-center"> 
        <?php if(count($errors) > 0): ?>
            <?php $__currentLoopData = $errors -> all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-12 alert alert-danger alert-dismissible">
                    <?php echo e($error); ?>

                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>

        <?php if(session('success')): ?>
                <div class="col-12 alert alert-success">
                    <?php echo e(session('success')); ?>

                </div>
        <?php endif; ?>

        <?php if(session('error')): ?>
                <div class="col-12 alert alert-danger">
                    <?php echo e(session('error')); ?>

                </div>
        <?php endif; ?>
    </div>


<?php /**PATH C:\xampp\htdocs\mondayblue\resources\views/inc/messages.blade.php ENDPATH**/ ?>