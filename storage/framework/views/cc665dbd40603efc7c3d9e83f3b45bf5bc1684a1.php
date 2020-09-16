<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><?php echo e(__('Dashboard')); ?></div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <?php echo e(__('You are logged in!')); ?>

                </div>
            </div>
        </div>
        <div class="col-12 mt-3">
            <div class="card">
                <div class="card-header">Your Posts 
                    <?php if(count($posts)>0): ?>
                    <span class="badge badge-primary"><?php echo e(count($posts)); ?></span>                        
                    <?php endif; ?>
                </div>
                <div class="card-body">
                    <?php if(count($posts) > 0): ?>
                        <table class="table table-striped">
                            <tr>
                                <th>
                                    Title
                                </th>
                                <th>
                                    Description
                                </th>
                                <th>
                                    Posted On
                                </th>
                                <th>
                                </th>
                                <th>
                                </th>
                            </tr>
                                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>
                                            <?php echo e($post->title); ?>

                                        </td>
                                        <td>
                                            <?php echo e($post->description); ?>

                                        </td>
                                        <td>
                                            <?php echo e($post->created_at); ?>

                                        </td>
                                        <td>
                                            <a href="/posts/<?php echo e($post->id); ?>/edit" class="btn btn-outline-primary"> Edit </a>
                                        </td>
                                        <td>        
                                            <?php echo Form::open(['action'=>['PostsController@destroy', $post->id], 'method' =>'POST', 'class'=>'text-right']); ?>

                                                <?php echo e(Form::hidden('_method','DELETE')); ?>

                                                <?php echo e(Form::submit('Delete',['class'=>'btn btn-outline-danger'])); ?>

                                            <?php echo Form::close(); ?>                                                
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                        </table>
                    <?php else: ?>
                        <p> You have no post yet.</p>        
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mondayblue\resources\views/dashboard.blade.php ENDPATH**/ ?>