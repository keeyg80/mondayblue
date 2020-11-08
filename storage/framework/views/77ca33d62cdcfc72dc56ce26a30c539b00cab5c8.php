

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="text-left m-3">
                <h3>Edit Post</h3>
            </div>
            <div class="col-12">
                <?php echo Form::open(['action' => ['PostsController@update', $post -> id], 'method' => 'POST', 'enctype' => 'multipart/form-data','onsubmit' => 'return confirm("Are You Sure ?")']); ?>

                    
                    <div class="form-group">
                        <?php echo e(Form::label('category', 'Category : '), false); ?>

                        <?php echo e(Form::select('category', [$post->category->id => $post->category->name] + $categories , $post->category->name,['class' => 'form-control']), false); ?>   
                        
                    </div>
                    <div class="form-group">
                        <?php echo e(Form::label('title','Title'), false); ?>

                        <?php echo e(Form::text('title',$post->title, ['class' => 'form-control', 'placeholder' => 'Title']), false); ?>

                    </div>
                    <div class="form-group">
                        <?php echo e(Form::label('description','description'), false); ?>

                        <?php echo e(Form::text('description',$post->description, ['class' => 'form-control', 'placeholder' => 'Description']), false); ?>

                    </div>
                    <div class="form-group">
                        <?php echo e(Form::label('body','Body'), false); ?>

                        <?php echo e(Form::textarea('body',$post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body text']), false); ?>

                    </div>
                    <div class="form-group">
                        <?php echo e(Form::label('price','Price USD'), false); ?>

                        <?php echo e(Form::text('price',$post->price, ['class' => 'form-control', 'placeholder' => 'Price USD']), false); ?>

                    </div>
                    <div class="form-group">
                        <?php echo e(Form::label('priceunit','Price Unit'), false); ?>

                        <?php echo e(Form::text('priceunit',$post->priceunit, ['class' => 'form-control', 'placeholder' => 'Job / Project / Campaign / App']), false); ?>

                    </div>
                    <div class="form-group">
                        <?php echo e(Form::label('delivery','Delivery'), false); ?>

                        <?php echo e(Form::text('delivery',$post->delivery, ['class' => 'form-control', 'placeholder' => 'number of Delivery by day']), false); ?>

                    </div>
                    <div class="form-group">
                        <?php echo e(Form::label('deliveryunit','Delivery Unit'), false); ?>

                        <?php echo e(Form::text('deliveryunit',$post->deliveryunit, ['class' => 'form-control', 'placeholder' => 'Day / Days']), false); ?>

                    </div>
                    <div class="form-group">
                        <?php echo e(Form::label('activestatus','Active : '), false); ?>

                        <?php echo e(Form::select('activestatus', [$post->activestatus] + ['yes' => 'yes', 'no' => 'no'], $post->activestatus,['class' => 'form-control']), false); ?>

                    </div>
                    <div class="form-group">
                        <?php echo e(Form::label('cover_image','Cover Image : '), false); ?>

                        <?php echo e(Form::file('cover_image'), false); ?>

                    </div>
                    <?php echo e(Form::hidden('_method','PUT'), false); ?>

                    <?php echo e(Form::submit('Submit',['class' =>'btn btn-primary']), false); ?>

                <?php echo Form::close(); ?>

            </div>            
        </div>
    </div>  

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mondayblue\resources\views/posts/edit.blade.php ENDPATH**/ ?>