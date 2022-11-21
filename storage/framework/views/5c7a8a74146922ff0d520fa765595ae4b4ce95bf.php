<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-evenly p-3 flex-wrap">
        <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card mt-5" style="width: 15rem;">
                <img class="card-img-top" src="<?php echo e(asset('storage/Assets/' . $book->image)); ?>" style="min-height: 350px">
                <div class="card-body">
                    <h5 class="card-title"><?php echo e($book->title); ?></h5>
                    <p class="card-text">By</p>
                    <p class="card-text"><?php echo e($book->author); ?></p>
                </div>
                <div class="card-footer">
                    <a href=<?php echo e('/bookdetail/' . $book->id); ?> class="btn btn-primary">Detail</a>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\william\Desktop\UAS\Semester 5\Web Programming\uts\resources\views/pages/home.blade.php ENDPATH**/ ?>