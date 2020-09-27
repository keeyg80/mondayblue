

<?php $__env->startSection('content'); ?>

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h2>Contact us</h2>
                <p class="sub-heading"></p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mb-5">
                <form>
                    <div class="form-group">
                        <label class="required" for="yourName">Your Name</label><br />
                        <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value=""
                                size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
                                aria-required="true" aria-invalid="false" /></span> </p>
                    </div>
                    <div class="form-group">
                        <label class="required" for="yourEmail">Your Email</label><br />
                        <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value=""
                                size="40"
                                class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control"
                                aria-required="true" aria-invalid="false" /></span> </p>
                    </div>
                    <div class="form-group">
                        <label class="required" for="yourSubject">Subject </label><br />
                        <span class="wpcf7-form-control-wrap your-subject"><input type="text" name="your-subject" value=""
                                size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
                                aria-required="true" aria-invalid="false" /></span>
                    </div>
                    <div class="form-group">
                        <label class="required" for="yourMessage">Your Message </label><br />
                        <span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10"
                                class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required form-control"
                                aria-required="true" aria-invalid="false"></textarea></span>
                    </div>
                    <p><input type="submit" value="Send" class="wpcf7-form-control wpcf7-submit btn btn-primary" /></p>
                </form>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div>
                    <h3>Corporate Office</h3>
                    <p>123, Jalan Tunku Abdul Rahman, <br />
                        Taman Tunku Abdul Rahman</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div>
                    <h3>Direct Contact</h3>
                    <p>
                        <strong>Phone</strong>: 800 987 6543<br />
                        <strong>Toll-Free</strong>: 800 987 1234<br />
                        <strong>Email</strong>: info@email.com
                    </p>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <h3>Company Deparment</h3>
                <p>Contact our team</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card border-0 h-100">
                    <img src="https://placeimg.com/600/500/people" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Managing Director</h5>
                        <p class="card-text">MD 087 4555435</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card border-0 h-100">
                    <img src="https://placeimg.com/600/500/people/grayscale" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Careers</h5>
                        <p class="card-text">HR 987 0987665</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card border-0 h-100">
                    <img src="https://placeimg.com/600/500/arc/grayscale" class="card-img-top image-resize" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Purchasing</h5>
                        <p class="card-text">Pur 087 37193424</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card border-0 h-100">
                    <img src="https://placeimg.com/600/500/tech/grayscale" class="card-img-top image-resize" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Help Line</h5>
                        <p class="card-text">CS 800900</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mondayblue\resources\views/pages/contact.blade.php ENDPATH**/ ?>