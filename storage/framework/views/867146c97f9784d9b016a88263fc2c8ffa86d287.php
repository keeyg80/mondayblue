

<?php $__env->startSection('content'); ?>
    <div class="container mt-5 mb-5">
                    
        <div class="card border-primary mb-3" >
            <div class="card-header"><h1><?php echo e($post->category); ?> : <?php echo e($post->title); ?></h1></div>
            <div class="card-body">
                <h4 class="card-title mb-4"><?php echo e($post->description); ?></h4>
                <p class="card-text"><?php echo $post->body; ?></p>
                <small>posted on <?php echo e($post->created_at); ?> by <?php echo e($post->user->name); ?></small>
                <h4>USD <?php echo e($post->price); ?>   / <small><?php echo e($post->puom); ?></small></h4>
                <h4>Quantity : <?php echo e($post->quantity); ?> <small><?php echo e($post->quom); ?></small></h4>
                <?php if(auth()->user()->id == $post->user_id): ?>
                    <a href="/posts/<?php echo e($post -> id); ?>/edit" class="btn btn-outline-primary"> Edit </a>
                    <?php echo Form::open(['action' =>['PostsController@destroy', $post->id], 'method' =>'POST', 'class'=>'text-right']); ?>

                        <?php echo e(Form::hidden('_method','DELETE')); ?>

                        <?php echo e(Form::submit('Delete',['class'=>'btn btn-outline-danger'])); ?>

                    <?php echo Form::close(); ?>

                <?php endif; ?>                
            </div>
            <div class="card-footer">
                <a href="/posts" class="btn btn-primary"> Go to Posts </a>
            </div>

            
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mondayblue\resources\views/posts/show.blade.php ENDPATH**/ ?>