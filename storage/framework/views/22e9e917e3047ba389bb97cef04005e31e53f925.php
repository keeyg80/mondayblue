

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
    <div class="container ">
        <div class="row mt-3">
            <?php if(count($posts)>0): ?>
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-3">
                        <div class="card border-primary mb-3 h-100" >
                            <div class="card-header bg-primary text-light"><?php echo e($post->category->name, false); ?></div>
                            <div class="inner">
                                <img src="/storage/cover_images/<?php echo e($post->cover_image, false); ?>" class="card-img-top image-resize" alt="...">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title"><?php echo e($post->title, false); ?></h4>
                                <?php if(count($post->reviews) > 0): ?>
                                <small>Review  </small> <span class="badge badge-pill badge-primary"><?php echo e((count($post->reviews)), false); ?></span>                                 
                                <small class="float-right"><span style="color: yellow; text-shadow: 0px 0px 2px #000000;">★</span> <?php echo e(number_format((float)(($post->reviews->sum('rating'))/(count($post->reviews))), 1, '.', ''), false); ?> / 5</small>
                                <?php endif; ?>
                                <p class="card-text mb-auto"><?php echo e($post->description, false); ?></p>
                                <small>posted on <?php echo e($post->created_at, false); ?> by <?php echo e($post->user->name, false); ?></small>
                                <h5>USD <?php echo e($post->price, false); ?> / <?php echo e($post->priceunit, false); ?></h5>
                                <h5>Delivery in <?php echo e($post->delivery, false); ?> <?php echo e($post->deliveryunit, false); ?></h5>
                            </div>
                            <div class="card-footer bg-transparent">
                                <a class="btn btn-lg btn-block btn-outline-primary" href="/posts/<?php echo e($post->id, false); ?>" >More</a>
                            </div>
                        </div>
                    </div>                    
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            <?php else: ?> 
                <div class="alert alert-dismissible alert-primary">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <h4 class="alert-heading">No posts found!</h4>
                    <strong>Welcome to MondayBlue!</strong> 
                </div>
            <?php endif; ?>
        </div>
        <?php echo e($posts->links(), false); ?>

    </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mondayblue\resources\views/posts/index.blade.php ENDPATH**/ ?>