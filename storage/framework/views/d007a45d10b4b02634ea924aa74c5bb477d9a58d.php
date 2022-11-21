<?php $__env->startSection('content'); ?>
    <div>
        <div>
            <h2 class="text-center p-3"><?php echo e($booksfilter[0]->category->name); ?></h2>
        </div>
        <div class="d-flex justify-content-evenly p-3 flex-wrap">
            <?php $__currentLoopData = $booksfilter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card mt-5" style="width: 15rem;">
                    <img class="card-img-top" src="<?php echo e(asset('storage/Assets/' . $b->book->image)); ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($b->book->title); ?></h5>
                        <p class="card-text">By</p>
                        <p class="card-text"><?php echo e($b->book->author); ?></p>
                    </div>
                    <div class="card-footer">
                        <a href=<?php echo e('/bookdetail/' . $b->book->id); ?> class="btn btn-primary">Detail</a>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\william\Desktop\UAS\Semester 5\Web Programming\uts\resources\views/pages/filter.blade.php ENDPATH**/ ?>