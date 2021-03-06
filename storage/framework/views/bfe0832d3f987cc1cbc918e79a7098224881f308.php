

<?php $__env->startSection('content'); ?>

    <style>
        .service-image{
            height: 250px;
            object-fit: cover;
            object-position: center center;
        }
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
        .branding{
            position: absolute;
            font-size: 4rem;
            font-weight: bolder;
            top: 0;
            left: 50%;
            transform: translate(-50%,-50%);
            font-family: cursive;
        }
        .brandingtext{
            position: absolute;
            font-size: 2rem;
            font-weight: lighter;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-20%);
        }
        .categorycard{

            -webkit-animation: fadein 1s; /* Safari, Chrome and Opera > 12.1 */
                -moz-animation: fadein 1s; /* Firefox < 16 */
                    -ms-animation: fadein 1s; /* Internet Explorer */
                    -o-animation: fadein 1s; /* Opera < 12.1 */
                        animation: fadein 1s;
        }
        @keyframes  fadein {
            from { opacity: 0; }
            to   { opacity: 1; }            
            from { transform: translateY(1%); }
            to   { transform: translateY(0%); }
        }

        /* Firefox < 16 */
        @-moz-keyframes fadein {
            from { opacity: 0; }
            to   { opacity: 1; }           
            from { transform: translateY(1%); }
            to   { transform: translateY(0%); }
        }

        /* Safari, Chrome and Opera > 12.1 */
        @-webkit-keyframes fadein {
            from { opacity: 0; }
            to   { opacity: 1; }           
            from { transform: translateY(1%); }
            to   { transform: translateY(0%); }
        }

        /* Internet Explorer */
        @-ms-keyframes fadein {
            from { opacity: 0; }
            to   { opacity: 1; }           
            from { transform: translateY(1%); }
            to   { transform: translateY(0%); }
        }

        /* Opera < 12.1 */
        @-o-keyframes fadein {
            from { opacity: 0; }
            to   { opacity: 1; }           
            from { transform: translateY(1%); }
            to   { transform: translateY(0%); }
        }

    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <div class="jumbotron jumbotronbackground">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 p-lg-5 mx-auto my-5">
                    <h1 class="branding">Monday<span class="text-primary">Blue</span></h1>
                    <p class="brandingtext">Hiring professional and freelancer portal</p>
                </div>
            </div>
        </div>
        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>
    <div class="container">
        <div class="row">
            <?php if(count($categories) > 0): ?>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-<?php echo e($category->imagewidth, false); ?> col-md-6 col-sm-12 p-2">
                            <div class="card categorycard shadow bg-white rounded">
                                <a href="/category/<?php echo e($category->id, false); ?> " class="position-relative">
                                    <img src="/storage/cover_images/<?php echo e($category->cover_image, false); ?> " class="card-img-top service-image" alt="...">
                                    <div class="card-img-overlay text-center d-flex">
                                        <h2 class="w-100 align-self-center text-white mx-auto "
                                            style="text-shadow: 0 0 5px #000000;"><?php echo e($category->name, false); ?> </h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <div class="col-12 p-2">
                        <div class="card shadow bg-white rounded">
                            <a href="/" class="position-relative">
                                <div class="card-img-overlay text-center d-flex">
                                    <h2 class="w-100 align-self-center text-white mx-auto "
                                        style="text-shadow: 0 0 5px #000000;">No Category Yet.</h2>
                                </div>
                            </a>
                        </div>
                    </div> 
                <?php endif; ?>
        </div>
    </div>
    <div class="container mt-5">
    <div class="container">
        <h2 style="font-size: 28px; line-height: 40px;">Services</h2>
        <p style="font-size: 18px; line-height: 30px;" class="sub-heading"></p>  
        <div id="carouselExampleControls" class="carousel slide carousel-multi-item" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="d-block w-100 service-image" style="height:300px;" src="../img/carouselbg.jpg"  alt="Starter">
                <div class="carousel-caption d-none d-md-block " >
                    <svg width="234" height="46" viewBox="0 0 234 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.4952 4.7261L19.0147 25.9577L26.494 4.7261H34.4157V34H28.3639V25.9979L28.967 12.1853L21.0655 34H16.9237L9.04228 12.2054L9.64545 25.9979V34H3.61374V4.7261H11.4952ZM38.3966 22.9218C38.3966 20.7637 38.8121 18.8403 39.6432 17.1514C40.4742 15.4625 41.6671 14.1557 43.222 13.2308C44.7902 12.306 46.6064 11.8435 48.6706 11.8435C51.606 11.8435 53.9986 12.7416 55.8483 14.5377C57.7115 16.3338 58.7503 18.7733 58.9647 21.8562L59.0049 23.344C59.0049 26.6815 58.0734 29.3623 56.2103 31.3863C54.3471 33.3968 51.8473 34.4021 48.7108 34.4021C45.5743 34.4021 43.0678 33.3968 41.1913 31.3863C39.3282 29.3757 38.3966 26.6413 38.3966 23.1831V22.9218ZM44.2071 23.344C44.2071 25.4082 44.5959 26.9898 45.3733 28.0889C46.1507 29.1746 47.2632 29.7175 48.7108 29.7175C50.1182 29.7175 51.2173 29.1813 52.0082 28.109C52.799 27.0233 53.1944 25.2942 53.1944 22.9218C53.1944 20.8978 52.799 19.3295 52.0082 18.217C51.2173 17.1045 50.1048 16.5483 48.6706 16.5483C47.2498 16.5483 46.1507 17.1045 45.3733 18.217C44.5959 19.3161 44.2071 21.0251 44.2071 23.344ZM67.9319 12.2456L68.1128 14.7588C69.6677 12.8153 71.752 11.8435 74.3657 11.8435C76.6712 11.8435 78.3868 12.5204 79.5128 13.8742C80.6387 15.228 81.215 17.252 81.2418 19.9461V34H75.4313V20.0869C75.4313 18.8537 75.1632 17.9624 74.6271 17.4128C74.0909 16.8498 73.1996 16.5684 71.953 16.5684C70.3178 16.5684 69.0913 17.2654 68.2737 18.6594V34H62.4631V12.2456H67.9319ZM84.7603 22.962C84.7603 19.5708 85.5177 16.8699 87.0323 14.8594C88.5603 12.8488 90.6446 11.8435 93.2852 11.8435C95.403 11.8435 97.1522 12.6343 98.5327 14.216V3.11765H104.363V34H99.1158L98.8343 31.6878C97.3867 33.4974 95.5236 34.4021 93.2449 34.4021C90.6848 34.4021 88.6273 33.3968 87.0725 31.3863C85.5311 29.3623 84.7603 26.5542 84.7603 22.962ZM90.5709 23.3842C90.5709 25.4216 90.9261 26.9831 91.6365 28.0688C92.3469 29.1545 93.379 29.6974 94.7328 29.6974C96.5289 29.6974 97.7955 28.9401 98.5327 27.4254V18.8403C97.8089 17.3257 96.5557 16.5684 94.773 16.5684C91.9716 16.5684 90.5709 18.8403 90.5709 23.3842ZM121.473 34C121.205 33.4773 121.011 32.8272 120.89 32.0497C119.483 33.618 117.653 34.4021 115.401 34.4021C113.27 34.4021 111.501 33.7855 110.094 32.5524C108.7 31.3192 108.003 29.7644 108.003 27.8879C108.003 25.5824 108.854 23.8131 110.556 22.58C112.272 21.3468 114.745 20.7235 117.975 20.7101H120.649V19.4636C120.649 18.4583 120.388 17.6541 119.865 17.0509C119.356 16.4477 118.545 16.1461 117.432 16.1461C116.454 16.1461 115.683 16.3807 115.12 16.8498C114.57 17.319 114.296 17.9624 114.296 18.78H108.485C108.485 17.52 108.874 16.3539 109.651 15.2816C110.429 14.2093 111.528 13.3716 112.949 12.7684C114.369 12.1518 115.964 11.8435 117.734 11.8435C120.414 11.8435 122.539 12.5204 124.107 13.8742C125.689 15.2146 126.48 17.1045 126.48 19.544V28.9736C126.493 31.0378 126.781 32.5993 127.344 33.6582V34H121.473ZM116.668 29.9588C117.526 29.9588 118.317 29.7711 119.041 29.3958C119.764 29.0071 120.301 28.491 120.649 27.8477V24.108H118.478C115.569 24.108 114.021 25.1133 113.833 27.1239L113.813 27.4656C113.813 28.1895 114.068 28.7859 114.577 29.2551C115.086 29.7242 115.783 29.9588 116.668 29.9588ZM138.744 25.7768L142.765 12.2456H148.998L140.252 37.3778L139.77 38.5238C138.469 41.3654 136.325 42.7862 133.336 42.7862C132.491 42.7862 131.633 42.6589 130.762 42.4042V38.001L131.647 38.0211C132.746 38.0211 133.564 37.8536 134.1 37.5185C134.649 37.1834 135.078 36.6271 135.386 35.8497L136.07 34.0603L128.45 12.2456H134.703L138.744 25.7768Z" fill="black" fill-opacity="0.8"/>
                        <path d="M151.672 34V4.7261H161.926C165.478 4.7261 168.172 5.4097 170.009 6.77688C171.845 8.13067 172.763 10.1211 172.763 12.7483C172.763 14.1825 172.394 15.4491 171.657 16.5483C170.92 17.634 169.895 18.4315 168.581 18.9408C170.082 19.3161 171.262 20.0735 172.12 21.2128C172.991 22.3521 173.426 23.7461 173.426 25.3948C173.426 28.2096 172.528 30.3408 170.732 31.7884C168.936 33.236 166.376 33.9732 163.052 34H151.672ZM157.704 21.253V29.1545H162.871C164.292 29.1545 165.398 28.8194 166.188 28.1492C166.993 27.4656 167.395 26.5274 167.395 25.3344C167.395 22.6537 166.007 21.2932 163.233 21.253H157.704ZM157.704 16.9906H162.167C165.21 16.937 166.731 15.7239 166.731 13.3514C166.731 12.0245 166.343 11.0728 165.565 10.4964C164.801 9.90667 163.588 9.61179 161.926 9.61179H157.704V16.9906ZM183.721 34H177.89V3.11765H183.721V34ZM201.554 31.7884C200.12 33.5309 198.136 34.4021 195.603 34.4021C193.271 34.4021 191.488 33.7319 190.255 32.3915C189.035 31.0512 188.412 29.0875 188.385 26.5006V12.2456H194.196V26.2995C194.196 28.5648 195.228 29.6974 197.292 29.6974C199.262 29.6974 200.616 29.0138 201.353 27.6466V12.2456H207.184V34H201.715L201.554 31.7884ZM221.58 34.4021C218.39 34.4021 215.789 33.4236 213.779 31.4667C211.781 29.5097 210.783 26.9027 210.783 23.6456V23.0826C210.783 20.8978 211.205 18.9475 212.05 17.2318C212.894 15.5028 214.087 14.1758 215.628 13.2509C217.183 12.3127 218.952 11.8435 220.936 11.8435C223.912 11.8435 226.251 12.7818 227.953 14.6583C229.669 16.5348 230.527 19.1955 230.527 22.6403V25.0128H216.674C216.861 26.4336 217.424 27.5729 218.363 28.4307C219.314 29.2886 220.514 29.7175 221.962 29.7175C224.2 29.7175 225.949 28.9066 227.209 27.2847L230.064 30.4815C229.193 31.7147 228.013 32.6797 226.526 33.3767C225.038 34.0603 223.389 34.4021 221.58 34.4021ZM220.916 16.5483C219.763 16.5483 218.825 16.937 218.101 17.7144C217.391 18.4918 216.935 19.6043 216.734 21.0519H224.817V20.5895C224.79 19.3027 224.441 18.3109 223.771 17.6139C223.101 16.9035 222.149 16.5483 220.916 16.5483Z" fill="#042CFB" fill-opacity="0.8"/>
                        </svg>
                <h5 style="text-shadow: 0 0 5px #000000;" class="text-white">Welcome to <?php echo e(config('app.name', 'MondayBlue'), false); ?></h5>
                </div>
                </div>
                
                <?php if(count($posts) > 0): ?>
                    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="carousel-item">
                        <div class="row no-gutters rounded bg-dark overflow-hidden flex-md-row mb-4 shadow-sm position-relative">                            
                            <div class="col p-3 d-flex flex-column position-static text-center bg-light" >
                                <strong class="h3 d-inline-block mb-2 text-primary"><?php echo e($post->category->name, false); ?> </strong>
                                <h5 class="mb-0"><?php echo e($post->title, false); ?></h5>
                                <?php if(count($post->reviews) > 0): ?>
                                <p>
                                <small>Reviews</small> <span class="badge badge-pill badge-primary"><?php echo e((count($post->reviews)), false); ?></span>                                 
                                <small><span style="color: yellow; text-shadow: 0px 0px 2px #000000;">★</span> <?php echo e(number_format((float)(($post->reviews->sum('rating'))/(count($post->reviews))), 1, '.', ''), false); ?> / 5</small>
                                </p>
                                <?php endif; ?>                                
                                <h5 class="mb-0"><?php echo e($post->description, false); ?></h5>
                                <small class="text-muted"><?php echo e($post->created_at, false); ?> by <?php echo e($post->user->name, false); ?></small>
                                <font class="h4 card-text mb-auto">
                                    USD <?php echo $post->price; ?> / <?php echo $post->priceunit; ?> 
                                </font>
                                <font>
                                    Delivery : <?php echo $post->delivery; ?>  <?php echo $post->deliveryunit; ?>

                                </font>
                                <a href="/posts/<?php echo e($post->id, false); ?>" class="stretched-link"> </a>
                            </div>
                            <div class="col-auto d-none d-lg-block">
                                <img class="service-image" src="/storage/cover_images/<?php echo e($post->cover_image, false); ?>" alt="...">
                            </div>                            
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <div class="carousel-item">
                        <img class="d-block w-100 image-resize" src="https://placeimg.com/800/300/arc/grayscale" alt="No Post">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>No post found</h5>
                        </div>
                    </div>   
                <?php endif; ?>
            </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
    </div>





<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mondayblue\resources\views/pages/home.blade.php ENDPATH**/ ?>