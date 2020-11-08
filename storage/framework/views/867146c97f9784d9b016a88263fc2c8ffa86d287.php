

<?php $__env->startSection('content'); ?>
    <style>
        
        .inner {
            overflow: hidden;

        }

        .inner img {
            transition: all 1.5s ease;
        }

        .inner:hover img {
            transform: scale(1.5);
        }

        .image-resize {
            height: 500px;
            object-fit: cover;
            object-position: center center;
        }
        .cover-image-thumbnail{
            height: 100px;
            width: 100px;
        }
        .reviewer-image-thumbnail{
            height: 40px;
            width: 40px;
        }
    </style>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-lg-8 col-md-6 col-sm-12">
                <div class="card border-primary">
                    <div class="inner text-center">
                        <img class="image-resize" src="/storage/cover_images/<?php echo e($post->cover_image, false); ?>" alt="cover image">
                    </div>
                    <div class="card-header">
                        <h1 class="text-primary"><?php echo e($post->title, false); ?></h1><small>posted on <?php echo e($post->created_at, false); ?> </small> 
                        <?php if(count($post->reviews) > 0): ?>
                            <small class="float-right"><span style="color: yellow; text-shadow: 0px 0px 2px #000000;">★</span> <?php echo e(number_format((float)(($reviews->sum('rating'))/(count($reviews))), 1, '.', ''), false); ?> / 5</small>
                        <?php endif; ?>
                    </div>
                    <div class="card-body">
                        <h2 class="card-title mb-4"><?php echo e($post->description, false); ?></h2>
                        <p class="card-text"><?php echo $post->body; ?></p>
                                               
                        <?php if(!Auth::guest()): ?>
                            <?php if(Auth::user()->id == $post->user_id): ?>
                                <div class="dflex">
                                    <div class="row float-right m-3">
                                        <a href="/posts/<?php echo e($post->id, false); ?>/edit" class="btn btn-outline-primary mr-2"> Edit </a>
                                        <?php echo Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST',
                                        'class' => 'text-right','onsubmit' => 'return confirm("Are You Sure You Want To DELETE ?")']); ?>

                                        <?php echo e(Form::hidden('_method', 'DELETE'), false); ?>

                                        <?php echo e(Form::submit('Delete', ['class' => 'btn btn-outline-danger']), false); ?>

                                        <?php echo Form::close(); ?>

                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <?php if(count($reviews) > 0): ?>
                <div class="card border-primary mt-3">
                    <div class="card-header">
                        <h4>Ratings and Reviews     <span class="badge badge-pill badge-primary"><?php echo e((count($reviews)), false); ?></span></h4>
                    </div>
                    <div class="card-body">
                        <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                        
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">                                                                                    
                                            <p class="bg-light p-3 rounded"><?php echo e($review->message, false); ?></p> 
                                            <img src="/storage/cover_images/<?php echo e($review->user->cover_image, false); ?> " class="card-img-top rounded-circle reviewer-image-thumbnail mr-3" alt="...">
                                            <font class="h3">
                                                <?php for($i=1; $i<=($review->rating); $i++): ?>
                                                    <span style="color: yellow; text-shadow: 0px 0px 3px #000000;">★</span>
                                                <?php endfor; ?> 
                                            </font>
                                            <p> 
                                                <small>Reviewed by <?php echo e($review->user->name, false); ?>  on <?php echo e($review->created_at, false); ?></small>                                                 
                                            </p>
                                        </div>
                                    </div>        
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                        
                    </div>
                </div>
                <?php endif; ?>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card border-primary">
                    <div class="card-header">
                        <h4>USD <?php echo e($post->price, false); ?> / <small><?php echo e($post->priceunit, false); ?></small></h4>
                    </div>
                    <div class="card-body text-center">
                        <img src="/storage/cover_images/<?php echo e($post->user->cover_image, false); ?> " class="card-img-top rounded-circle cover-image-thumbnail" alt="...">
                        <p class="h4">
                            Hi, I am <?php echo e($post->user->name, false); ?>

                            <div class="h6 text-left text-mute">Contact me thru <?php echo e($post->user->email, false); ?></div>
                            <h6 class="text-left">I will complete in <?php echo e($post->delivery, false); ?> <?php echo e($post->deliveryunit, false); ?></h6>
                        </p>
                    </div>
                   
                    <div class="card-footer" >
                        <?php if(!Auth::guest()): ?>
                            <?php if(($post->user->bankaccount) != ''): ?>
                                <a href="#" class="btn btn-success btn-block"> Order Now </a>
                            <?php else: ?>
                                <a href="#" class="btn btn-primary btn-block"> Order will be available soon </a>
                            <?php endif; ?> 
                        <?php endif; ?>                                                
                    </div>                                    
                </div>
                <?php if(!Auth::guest()): ?>
                <?php if(Auth::user()->id != $post->user_id): ?>
                <div id="accordion">
                    <div class="card border-primary mt-3" id="contactForm">
                            <div class="card-header" id="headingcontact">
                                <h5 class="mb-0">
                                <button class="btn btn-light btn-block collapsed" data-toggle="collapse" data-target="#collapsecontact" aria-expanded="false" aria-controls="collapsecontact">
                                    Email <?php echo e($post->user->name, false); ?>

                                </button>
                                </h5>
                            </div>
                            <div id="collapsecontact" class="collapse" aria-labelledby="headingcontact" data-parent="#accordion">
                                
                                <div class="card-body">
                                    <div class="form-group">
                                        <?php echo e(Form::label('sender','Sender :'), false); ?>  
                                        <?php echo e(Form::text('sender',Auth::user()->name, ['class' => 'form-control', 'readonly' => 'true']), false); ?>

                                    </div>   
                                    <div class="form-group">
                                        <?php echo e(Form::label('sender_email','Sender email :'), false); ?>  
                                        <?php echo e(Form::text('sender_email',Auth::user()->email, ['class' => 'form-control', 'readonly' => 'true']), false); ?>

                                    </div>     
                                    <div class="form-group">
                                        <?php echo e(Form::label('subject','Mail Subject :'), false); ?>  
                                        <?php echo e(Form::text('subject','', ['class' => 'form-control']), false); ?>

                                    </div>                   
                                    <div class="form-group">
                                        <?php echo e(Form::label('message','Message : '), false); ?>

                                        <?php echo e(Form::textarea('message','', ['class' => 'form-control', 'placeholder' => '']), false); ?>

                                    </div>                      
                                    <div class="form-group">
                                        <?php echo e(Form::hidden('post_id',$post->id), false); ?>

                                    </div>                               
                                </div>
                                <div class="card-footer">
                                    <?php echo e(Form::submit('Submit',['class' =>'btn btn-success btn-block' ]), false); ?>

                                </div>
                                
                            </div> 
                        </div>
                    </div>
                    <div class="card border-primary mt-3" id="reviewForm">
                        <div class="card-header" id="headingreview">
                            <h5 class="mb-0">
                              <button class="btn btn-light btn-block collapsed" data-toggle="collapse" data-target="#collapsereview" aria-expanded="false" aria-controls="collapsereview">
                                Review
                              </button>
                            </h5>
                        </div>
                        <div id="collapsereview" class="collapse" aria-labelledby="headingreview" data-parent="#accordion">
                            <?php echo Form::open(['action' => ['ReviewsController@store'], 'method' => 'POST', 'enctype' => 'multipart/form-data','onsubmit' => 'return confirm("Are You Sure post review ? no change or delete after this.")']); ?>

                            <div class="card-body">
                                <div class="form-group">
                                    <?php echo e(Form::label('rating','Rating :'), false); ?>  
                                    <div class="row">                    
                                        <?php for($i=1; $i<=5; $i++): ?>
                                            <div class="col-8">
                                                <?php echo e(Form::radio('rating', $i , false), false); ?>

                                                <?php for($j=1; $j<=$i; $j++): ?>
                                                    <span style="color: yellow; text-shadow: 0px 0px 2px #000000;">★</span>
                                                <?php endfor; ?>
                                            </div>
                                        <?php endfor; ?>
                                    </div>
                                </div>                     
                                <div class="form-group">
                                    <?php echo e(Form::label('message','Review : '), false); ?>

                                    <?php echo e(Form::textarea('message','', ['class' => 'form-control', 'placeholder' => '']), false); ?>

                                </div>                      
                                <div class="form-group">
                                    <?php echo e(Form::hidden('post_id',$post->id), false); ?>

                                </div>                             
                            </div>
                            <div class="card-footer">
                                <?php echo e(Form::submit('Submit',['class' =>'btn btn-primary btn-block' ]), false); ?>

                            </div>
                            <?php echo Form::close(); ?>  
                        </div> 
                    </div>
                </div>
                <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mondayblue\resources\views/posts/show.blade.php ENDPATH**/ ?>