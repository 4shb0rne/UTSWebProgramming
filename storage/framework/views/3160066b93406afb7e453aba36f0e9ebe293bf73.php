<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-around p-3 flex-wrap">
        <div class="card mt-5" style="width: 30rem">
            <img class="card-img-top" src="<?php echo e(asset('storage/Assets/' . $book->image)); ?>">
            <div class="card-body">
                <p class="card-text"><b>Title</b> : <?php echo e($book->title); ?></p>
                <p class="card-text"><b>Author</b> : <?php echo e($book->author); ?></p>
                <p class="card-text"><b>Publisher</b> : <?php echo e($book->publisher->name); ?></p>
                <p class="card-text"><b>Year</b> : <?php echo e($book->year); ?></p>
                <p class="card-text"><b>Synopsis</b> : <?php echo e($book->synopsis); ?></p>
                <div class="card-text"><b>Genre</b> : </div>
                <?php $__currentLoopData = ; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as ): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="#" class="card-link">Card link</a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\william\Desktop\UAS\Semester 5\Web Programming\uts\resources\views/pages/detail.blade.php ENDPATH**/ ?>