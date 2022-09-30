

<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">Show Book</h2>
        </div>
        <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
            <a class="btn btn-primary" href="<?php echo e(route('books.index')); ?>"> Back</a>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Book Authorid : </strong>
                <?php echo e($book->book_authorid); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Book Title : </strong>
                <?php echo e($book->book_title); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Book Isbn : </strong>
                <?php echo e($book->book_isbn); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Book Pub year : </strong>
                <?php echo e($book->book_pub_year); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Book Available : </strong>
                <?php echo e($book->book_available); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('Books.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\library\resources\views/books/show.blade.php ENDPATH**/ ?>