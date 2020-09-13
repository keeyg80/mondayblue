

<?php $__env->startSection('content'); ?>
 
        
        
        <div class="jumbotron jumbotronbackground text-center">
            <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 font-weight-normal">MondayBlue</h1>
            <p class="lead font-weight-normal">Hiring professional and freelancer portal</p>
            <a class="btn btn-outline-secondary" href="#">Coming soon</a>
            </div>
            <div class="product-device shadow-sm d-none d-md-block"></div>
            <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
        </div>

        

<div class="container">  
        <h1 class="title m-b-md">
            Featured Jobs
        </h1>
            <div class="row mb-2">
                <?php if(count($posts)>=1): ?>
                    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-3">
                            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-100 position-relative">
                                <div class="col p-4 d-flex flex-column position-static">
                                    <strong class="d-inline-block mb-2 text-primary"><?php echo e($post->category); ?></strong>
                                    <h3 class="mb-auto"><?php echo e($post->title); ?></h3>
                                    <a href="/posts/<?php echo e($post->id); ?>" class="stretched-link">Continue reading</a>
                                </div>                        
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?> 
                    <p>No posts found</p>
                <?php endif; ?>

                
            </div>
</div>

<div class="container">
    <h3 class="title m-b-md">
        Uploaded Posts
    </h1>
    <div class="row">
        <?php if(count($posts)>=1): ?>
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-3">
                    <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-100 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 text-success"><?php echo e($post->category); ?></strong>
                            <h3 class="mb-0"><?php echo e($post->title); ?></h3>
                            <div class="mb-1 text-muted">Posted on : <?php echo e($post->created_at); ?></div>
                            <p class="mb-2"><?php echo e($post->description); ?></p>
                            <small class="text-secondary mb-auto"><?php echo e($post->body); ?></small>
                            <a href="/posts/<?php echo e($post->id); ?>" class="stretched-link">Continue reading</a>
                        </div>                        
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?> 
            <p>No posts found</p>
        <?php endif; ?>
    </div>
</div>

       




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mondayblue\resources\views/pages/home.blade.php ENDPATH**/ ?>