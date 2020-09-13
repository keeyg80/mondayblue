

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="text-left m-3">
                <h3>Edit Post</h3>
            </div>
            <div class="col-12">
                <?php echo Form::open(['action' => ['PostsController@update', $post -> id], 'method' => 'POST']); ?>

                    <div class="form-group">
                        <?php echo e(Form::label('category','Category')); ?>

                        <?php echo e(Form::text('category',$post->category, ['class' => 'form-control', 'placeholder' => 'Category'])); ?>

                    </div>
                    <div class="form-group">
                        <?php echo e(Form::label('title','Title')); ?>

                        <?php echo e(Form::text('title',$post->title, ['class' => 'form-control', 'placeholder' => 'Title'])); ?>

                    </div>
                    <div class="form-group">
                        <?php echo e(Form::label('description','description')); ?>

                        <?php echo e(Form::text('description',$post->description, ['class' => 'form-control', 'placeholder' => 'Description'])); ?>

                    </div>
                    <div class="form-group">
                        <?php echo e(Form::label('body','Body')); ?>

                        <?php echo e(Form::textarea('body',$post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body text'])); ?>

                    </div>
                    <div class="form-group">
                        <?php echo e(Form::label('price','Price USD')); ?>

                        <?php echo e(Form::text('price',$post->price, ['class' => 'form-control', 'placeholder' => 'Price USD'])); ?>

                    </div>
                    <div class="form-group">
                        <?php echo e(Form::label('puom','Price UOM')); ?>

                        <?php echo e(Form::text('puom',$post->puom, ['class' => 'form-control', 'placeholder' => 'Job / Project / Month / Day'])); ?>

                    </div>
                    <div class="form-group">
                        <?php echo e(Form::label('quantity','Quantity')); ?>

                        <?php echo e(Form::text('quantity',$post->quantity, ['class' => 'form-control', 'placeholder' => 'number of person / job / project'])); ?>

                    </div>
                    <div class="form-group">
                        <?php echo e(Form::label('quom','Quantity UOM')); ?>

                        <?php echo e(Form::text('quom',$post->quom, ['class' => 'form-control', 'placeholder' => 'Person / Job / Project/ Vacancy'])); ?>

                    </div>
                    <?php echo e(Form::hidden('_method','PUT')); ?>

                    <?php echo e(Form::submit('Submit',['class' =>'btn btn-primary'])); ?>

                <?php echo Form::close(); ?>

            </div>            
        </div>
    </div>  

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mondayblue\resources\views/posts/edit.blade.php ENDPATH**/ ?>