

<?php $__env->startSection('content'); ?>

    <!-- CSS only -->
    <link rel="stylesheet" href="<?php echo e(asset('css/carousel.css'), false); ?>">


<!-- Javascript -->
<script src="<?php echo e(asset('js/jquery-3.3.1.min.js'), false); ?>"></script>
<script src="<?php echo e(asset('js/jquery.backstretch.min.js'), false); ?>"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="<?php echo e(asset('js/wow.min.js'), false); ?>"></script>
<script src="<?php echo e(asset('js/scripts.js'), false); ?>"></script>


<div class="top-content">
        	<div class="container">
        		<div id="carousel-example" class="carousel slide" data-ride="carousel">
        			<div class="carousel-inner row w-100 mx-auto" role="listbox">
            			<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">
                            <div class="card card-body">
                                <img src="img/1.jpg" class="img-fluid mx-auto d-block" alt="img1">
                            </div>
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <!-- <img src="img/2.jpg" class="img-fluid mx-auto d-block" alt="img2"> -->
                            <!-- s -->
                            <!-- <div class="card flex-md-row mb-4 box-shadow h-md-250"> -->
                                <div class="card-body d-flex flex-column align-items-start">
                                    <strong class="d-inline-block mb-2 text-primary">Hire</strong>
                                    <h3 class="mb-0">
                                        <a class="text-dark" href="#">Design a logo for Hardware Store</a>
                                    </h3>
                                    
                                </div>
                            <!-- </div> -->
                            <!-- e -->
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							<img src="img/3.jpg" class="img-fluid mx-auto d-block" alt="img3">
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							<img src="img/4.jpg" class="img-fluid mx-auto d-block" alt="img4">
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							<img src="img/5.jpg" class="img-fluid mx-auto d-block" alt="img5">
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							<img src="img/6.jpg" class="img-fluid mx-auto d-block" alt="img6">
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							<img src="img/7.jpg" class="img-fluid mx-auto d-block" alt="img7">
						</div>
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							<img src="img/8.jpg" class="img-fluid mx-auto d-block" alt="img8">
						</div>
        			</div>
        			
        		</div>
					<a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
        	</div>
        </div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mondayblue\resources\views/pages/carouselsitem.blade.php ENDPATH**/ ?>