

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

        .image-resize {
            height: 200px;
            object-fit: cover;
            object-position: center center;
        }

    </style>
    <div class="container">
        <div class="row">
            <h2 class="text-primary" style="font-size: 28px; line-height: 40px;">Our Story</h2>
            <p style="font-size: 18px; line-height: 30px;" class="sub-heading"></p>
        </div>
        
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque quis ligula eu lectus vulputate
                    porttitor sed feugiat nunc. Mauris ac consectetur ante, dapibus gravida tellus. Nullam aliquet eleifend
                    dapibus. Cras sagittis, ex euismod lacinia tempor, lectus orci elementum augue, eget auctor metus ante
                    sit amet velit.</p>
            </div>
            <div class="col-lg-6 col-md-12">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque quis ligula eu lectus vulputate
                    porttitor sed feugiat nunc. Mauris ac consectetur ante, dapibus gravida tellus. Nullam aliquet eleifend
                    dapibus. Cras sagittis, ex euismod lacinia tempor, lectus orci elementum augue, eget auctor metus ante
                    sit amet velit.</p>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="row">
            <h2 class="text-primary" style="font-size: 28px; line-height: 40px;">Our Values</h2>
            <p style="font-size: 18px; line-height: 30px;" class="sub-heading"></p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <div class="card h-100">
                    <img src="https://placeimg.com/600/500/tech/sepia" class="card-img-top image-resize" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Quality</h5>
                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. In quas consequuntur
                            ipsa et veritatis, odit soluta, tempore magni cumque, laboriosam similique expedita error sequi
                            nobis culpa tenetur ad quibusdam repellat.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card h-100">
                    <img src="https://placeimg.com/600/500/people/sepia" class="card-img-top image-resize" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Respect</h5>
                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. In quas consequuntur
                            ipsa et veritatis, odit soluta, tempore magni cumque, laboriosam similique expedita error sequi
                            nobis culpa tenetur ad quibusdam repellat.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card h-100">
                    <img src="https://placeimg.com/600/500/arc/grayscale" class="card-img-top image-resize" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Responsibility</h5>
                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. In quas consequuntur
                            ipsa et veritatis, odit soluta, tempore magni cumque, laboriosam similique expedita error sequi
                            nobis culpa tenetur ad quibusdam repellat.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="row">
            <h2 class="text-primary" style="font-size: 28px; line-height: 40px;">Our Team</h2>
            <p style="font-size: 18px; line-height: 30px;" class="sub-heading"></p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="card border-0 h-100">
                    <img src="https://placeimg.com/600/500/people" class="card-img-top image-resize" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">John Doe</h5>
                        <p class="card-text">Managing Director</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card border-0 h-100">
                    <img src="https://placeimg.com/600/500/arc/sepia" class="card-img-top  image-resize" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Hugo Bash</h5>
                        <p class="card-text">IT Head</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card border-0 h-100">
                    <img src="https://placeimg.com/600/500/arc" class="card-img-top image-resize" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Jane Doe</h5>
                        <p class="card-text">Chief Designer</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card border-0 h-100">
                    <img src="https://placeimg.com/600/500/nature/grayscale" class="card-img-top image-resize" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Barney Dino</h5>
                        <p class="card-text">Technician</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mondayblue\resources\views/pages/about.blade.php ENDPATH**/ ?>