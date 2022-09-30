

<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-lg-12">
        <h2 class="text-center">Add Book</h2>
    </div>
    <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
        <a class="btn btn-primary" href="<?php echo e(route('books.index')); ?>"> Back</a>
    </div>
</div>

<?php if($errors->any()): ?>
<div class="alert alert-danger">
    <strong>Oops!</strong> There were some problems with your input.<br><br>
    <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php endif; ?>

<form action="<?php echo e(route('books.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Book Authorid:</strong>
                <input type="number" name="book_authorid" class="form-control"
                 placeholder="book Authorid">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Book Title:</strong>
                <input type="text" name="book_title" class="form-control"
                 placeholder="book Title">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Book Isbn:</strong>
                <input type="text" class="form-control" name="book_isbn"
                 placeholder="book Isbn">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Book Pub year:</strong>
                <input type="number" class="form-control" name="book_pub_year"
                 placeholder="book Pubyear">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Book Available:</strong>
                <input type="number" class="form-control" name="book_available"
                 placeholder="book Available">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('books.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\library\resources\views/books/create.blade.php ENDPATH**/ ?>