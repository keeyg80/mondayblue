

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

    <div class="jumbotron jumbotronbackground">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 p-lg-5 mx-auto my-5">
                    <div class="card border-primary text-left">
                        <div class="card-header">Search Category</div>
                        <div class="card-body">
                            <?php echo Form::open(['action' => 'PostsController@index', 'method' => 'POST']); ?>

                            <div class="form-group">
                                <?php echo e(Form::label('category', 'Category : ')); ?>

                                <?php echo e(Form::select('category', [null => 'Please Select'] + $categories, '', ['class' => 'form-control'])); ?>

                            </div>
                            <div class="form-group">
                                <?php echo e(Form::label('created_at', 'Posting Date')); ?>

                                <?php echo e(Form::text('created_at', '', ['class' => 'form-control', 'placeholder' => 'posting date'])); ?>

                            </div>
                            <?php echo e(Form::submit('Search', ['class' => 'btn btn-primary'])); ?>

                            <?php echo Form::close(); ?>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 p-lg-5 mx-auto my-5">
                    <h1 class="display-4 font-weight-normal">MondayBlue</h1>
                    <p class="lead font-weight-normal">Hiring professional and freelancer portal</p>
                    <a class="btn btn-outline-secondary" href="#">Coming soon</a>
                </div>
            </div>
        </div>
        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>

    

    <hr>
    <style>
        /* .mycards > div > div.card {
                        height: calc(100% - 15px);
                        margin-bottom: 15px;
                    } */

    </style>
    <div class="container  ">
        <div class="row mycards">
            <div class="col-lg-3 col-md-3 col-sm-6 p-2">
                <div class="card shadow bg-white rounded">
                    <a href="#" class="position-relative">
                        <img src="https://placeimg.com/320/370/animals/sepia" class="card-img-top" alt="...">
                        <div class="card-img-overlay text-center d-flex">
                            <h2 class="w-100 align-self-center text-white mx-auto "
                                style="text-shadow: 2px 2px 4px #000000;">Graphic Designer</h2>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 p-2">
                <div class="card shadow bg-white rounded">
                    <a href="#" class="position-relative">
                        <img src="https://placeimg.com/320/370/nature" class="card-img-top" alt="...">
                        <div class="card-img-overlay text-center d-flex">
                            <h2 class="w-100 align-self-center text-white mx-auto "
                                style="text-shadow: 2px 2px 4px #000000;">Video Editing</h2>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 p-2">
                <div class="card shadow bg-white rounded">
                    <a href="#" class="position-relative">
                        <img src="https://placeimg.com/640/360/arch/grayscale" class="card-img-top" alt="...">
                        <div class="card-img-overlay text-center d-flex">
                            <h2 class="w-100 align-self-center text-white mx-auto "
                                style="text-shadow: 2px 2px 4px #000000;">Social Media Advertising</h2>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 p-2">
                <div class="card shadow bg-white rounded">
                    <a href="#" class="position-relative">
                        <img src="https://placeimg.com/640/360/arch/sepia" class="card-img-top" alt="...">
                        <div class="card-img-overlay text-center d-flex">
                            <h2 class="w-100 align-self-center text-white mx-auto "
                                style="text-shadow: 2px 2px 4px #000000;">Website Development</h2>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 p-2">
                <div class="card shadow bg-white rounded">
                    <a href="#" class="position-relative">
                        <img src="https://placeimg.com/320/370/nature/sepia" class="card-img-top" alt="...">
                        <div class="card-img-overlay text-center d-flex">
                            <h2 class="w-100 align-self-center text-white mx-auto "
                                style="text-shadow: 2px 2px 4px #000000;">Copywriting</h2>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 p-2">
                <div class="card shadow bg-white rounded">
                    <a href="#" class="position-relative">
                        <img src="https://placeimg.com/320/370/people/sepia" class="card-img-top" alt="...">
                        <div class="card-img-overlay text-center d-flex">
                            <h2 class="w-100 align-self-center text-white mx-auto "
                                style="text-shadow: 2px 2px 4px #000000;">Translator</h2>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 p-2">
                <div class="card shadow bg-white rounded">
                    <a href="#" class="position-relative">
                        <img src="https://placeimg.com/320/370/tech/sepia" class="card-img-top" alt="...">
                        <div class="card-img-overlay text-center d-flex">
                            <h2 class="w-100 align-self-center text-white mx-auto "
                                style="text-shadow: 2px 2px 4px #000000;">2D/3D Animator</h2>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 p-2">
                <div class="card shadow bg-white rounded">
                    <a href="#" class="position-relative">
                        <img src="https://placeimg.com/640/360/animals/grayscale" class="card-img-top" alt="...">
                        <div class="card-img-overlay text-center d-flex">
                            <h2 class="w-100 align-self-center text-white mx-auto "
                                style="text-shadow: 2px 2px 4px #000000;">Storyboard Artist</h2>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 p-2">
                <div class="card shadow bg-white rounded">
                    <a href="#" class="position-relative">
                        <img src="https://picsum.photos/320/370" class="card-img-top" alt="...">
                        <div class="card-img-overlay text-center d-flex">
                            <h2 class="w-100 align-self-center text-white mx-auto "
                                style="text-shadow: 2px 2px 4px #000000;">etc</h2>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <hr>

    <div class="container">
        <h1 class="title m-b-md">
            Our Posts
        </h1>
        <div class="row mb-2">
            <?php if(count($posts) >= 1): ?>
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-3">
                        <div class="card h-100">
                            <div class="inner">
                                <img src="/storage/cover_images/<?php echo e($post->cover_image); ?>" class="card-img-top image-resize" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo e($post->title); ?></h5>
                                <p class="card-text"><?php echo e($post->description); ?></p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">USD <?php echo e($post->price); ?> / <small
                                        class="text-muted"><?php echo e($post->puom); ?></small></li>
                                <li class="list-group-item"><?php echo e($post->quantity); ?> <small><?php echo e($post->quom); ?></small></li>
                            </ul>
                            <div class="card-body">
                                <a href="/posts/<?php echo e($post->id); ?>" class="btn btn-primary"> Read More </a>
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
                <?php if(count($posts) >= 1): ?>
                    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-3">
                            <div
                                class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-100 position-relative">
                                <div class="col p-4 d-flex flex-column position-static">
                                    <strong class="d-inline-block mb-2 text-success"><?php echo e($post->category); ?></strong>
                                    <h3 class="mb-0"><?php echo e($post->title); ?></h3>
                                    <div class="mb-1 text-muted">Posted on : <?php echo e($post->created_at); ?></div>
                                    <p class="mb-2"><?php echo e($post->description); ?></p>
                                    <small class="text-secondary mb-auto"><?php echo $post->body; ?></small>
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