

<?php $__env->startSection('content'); ?>
<style>
    
    .inner {
        overflow: hidden;
    }

    .inner img {
        transition: all 1.75s ease;
    }

    .inner:hover img {
        transform: scale(1.2);
    }
    .image-resize{
        height: 200px;
        object-fit: cover;
        object-position: center center;
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <?php echo e(__('Dashboard'), false); ?>

                </div>
                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status'), false); ?>

                        </div>
                    <?php endif; ?>
                    <?php if($user->activestatus != 'no'): ?>
                    
                    <a href="/posts/create" class="btn btn-primary"> Create Post </a>
                    <a href="/myprofile/<?php echo e(Auth::user()->id, false); ?>" class="btn btn-primary"> My Profile</a>
                    <a class="btn btn-warning" href="<?php echo e(route('password.request'), false); ?>">
                        <?php echo e(__('Reset Password?'), false); ?>

                    </a>
                    <?php endif; ?>
                    <?php if($user->activestatus == 'no'): ?>
                    <div class="alert alert-dismissible alert-warning">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4 class="alert-heading">Warning!</h4>
                        <p class="mb-0">your account has been suspended, <a href="#" class="alert-link">please contact admin!</a>.</p>
                      </div>                    
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="col-12 mt-3">
            <div class="card">
                <div class="card-header">Your Posts 
                    <?php if(count($posts)>0): ?>
                    <span class="badge badge-primary"><?php echo e(count($posts), false); ?></span>                        
                    <?php endif; ?>
                </div>
                <div class="card-body">
                    <?php if(count($posts) > 0): ?>

                    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="card">
                            <div class="row">
                                <div class="col-lg-4 col-sm-12">
                                    <div class="inner rounded-left">
                                        <img src="/storage/cover_images/<?php echo e($post->cover_image, false); ?>" class="card-img-top image-resize" alt="...">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <div class="card-body">
                                        <h4><?php echo e($post->category->name, false); ?> : <?php echo e($post->title, false); ?></h4>                                        
                                        <p>
                                            <small class="text-muted float-right">
                                                <?php echo e($post->created_at, false); ?>

                                            </small>
                                            <?php echo e($post->description, false); ?> <br>
                                            USD <?php echo e($post->price, false); ?> per <?php echo e($post->priceunit, false); ?>

                                        </p>
                                        <p>
                                            Active : <?php if(($post->activestatus)=='yes'): ?> ✔ <?php else: ?> <strong class="text-danger h4">✘</strong> <?php endif; ?>
                                        </p>                                                                               
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-12">
                                    <div class="card-body flex-center h-100">                                        
                                        <?php if($user->activestatus != 'no'): ?> 
                                            <a href="/posts/<?php echo e($post->id, false); ?>/edit" class="btn btn-outline-primary mr-2"> Edit </a>                                          
                                            <?php echo Form::open(['action'=>['PostsController@destroy', $post->id], 'method' =>'POST', 'class'=>'text-right','onsubmit' => 'return confirm("Are You Sure To DELETE ? this cannot be recovered")']); ?>

                                                <?php echo e(Form::hidden('_method','DELETE'), false); ?>

                                                <?php echo e(Form::submit('Delete',['class'=>'btn btn-outline-danger mr-3']), false); ?>

                                            <?php echo Form::close(); ?>   
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <div class="alert alert-dismissible alert-light">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>You have no post yet!</strong> <a href="/posts/create" class="alert-link">Make your first money making post!!!</a>
                        </div>           
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mondayblue\resources\views/dashboard.blade.php ENDPATH**/ ?>