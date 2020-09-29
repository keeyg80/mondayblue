

<?php $__env->startSection('content'); ?>
    
    <div class="container ">
        <h1>Our Posts</h1>
        <div class="row mt-3">
            <?php if(count($posts)>0): ?>
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-3">
                        <div class="card border-primary mb-3 h-100" >
                            <div class="card-header bg-success text-light"><?php echo e($post->category); ?></div>
                            <div class="card-body">
                                <h4 class="card-title"><?php echo e($post->title); ?></h4>
                                <p class="card-text mb-auto"><?php echo e($post->description); ?></p>
                                <small>posted on <?php echo e($post->created_at); ?> by <?php echo e($post->user->name); ?></small>
                            </div>
                            <div class="card-footer bg-transparent">
                                <a class="btn btn-lg btn-block btn-outline-success" href="/posts/<?php echo e($post->id); ?>" >More</a>
                            </div>
                        </div>
                    </div>                    
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            <?php else: ?> 
                <p>No posts found</p>
            <?php endif; ?>
        </div>
        <?php echo e($posts->links()); ?>

    </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mondayblue\resources\views/posts/index.blade.php ENDPATH**/ ?>