

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="card border border-dark">
            <div class="card-header">
                    <h3>Create Post</h3>
            </div>            
            
            <?php echo Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data','onsubmit' => 'return confirm("Are You Sure ?")']); ?>

                <div class="card-body row">    
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xm-12">    
                        <div class="form-group">
                                <?php echo e(Form::label('category', 'Category : '), false); ?>

                                <?php echo e(Form::select('category', [null=>'Please Select'] + $categories ,'',['class' => 'form-control']), false); ?>

                            </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xm-12">
                        <div class="form-group">
                            <?php echo e(Form::label('title','Title : '), false); ?>

                            <?php echo e(Form::text('title','', ['class' => 'form-control', 'placeholder' => 'Specify Job or service']), false); ?>

                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <?php echo e(Form::label('description','Description : '), false); ?>

                            <?php echo e(Form::text('description','', ['class' => 'form-control', 'placeholder' => 'I will do ......']), false); ?>

                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <?php echo e(Form::label('body','Body : '), false); ?>

                            <?php echo e(Form::textarea('body','', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body text']), false); ?>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xm-12">
                        <div class="form-group">
                            <?php echo e(Form::label('price','USD : '), false); ?>

                            <?php echo e(Form::text('price','', ['class' => 'form-control', 'placeholder' => 'Price']), false); ?>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xm-12">
                        <div class="form-group">
                            <?php echo e(Form::label('priceunit','Price UOM : '), false); ?>

                            <?php echo e(Form::text('priceunit','', ['class' => 'form-control', 'placeholder' => 'Job / Project / Campaign / App']), false); ?>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xm-12">
                        <div class="form-group">
                            <?php echo e(Form::label('delivery','Delivery : '), false); ?>

                            <?php echo e(Form::text('delivery','', ['class' => 'form-control', 'placeholder' => 'number of Delivery by day']), false); ?>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xm-12">
                        <div class="form-group">
                            <?php echo e(Form::label('deliveryunit','Delivery Unit : '), false); ?>

                            <?php echo e(Form::text('deliveryunit','', ['class' => 'form-control', 'placeholder' => 'Day / Days']), false); ?>

                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <?php echo e(Form::label('activestatus','Active : '), false); ?>

                            <?php echo e(Form::select('activestatus',  ['yes' => 'yes', 'no' => 'no'], 'yes',['class' => 'form-control']), false); ?>

                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <?php echo e(Form::label('cover_image','Cover Image : '), false); ?>

                            <?php echo e(Form::file('cover_image'), false); ?>

                        </div>
                    </div>
                        <?php echo e(Form::submit('Submit',['class' =>'btn btn-primary' ]), false); ?>

                </div> 
            <?php echo Form::close(); ?>

                       
        </div>
    </div>  

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mondayblue\resources\views/posts/create.blade.php ENDPATH**/ ?>