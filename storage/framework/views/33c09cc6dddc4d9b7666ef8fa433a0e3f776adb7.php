<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-around p-3 flex-wrap">
        <div class="card mt-5" style="width: 30rem">
            <img class="card-img-top" src="<?php echo e(asset('storage/Assets/' . $publisher->image)); ?>" style="min-height: 350px">
            <div class="card-body">
                <p class="card-text">Name : <?php echo e($publisher->name); ?></p>
                <p class="card-text">Address : <?php echo e($publisher->address); ?></p>
                <p class="card-text">Email : <?php echo e($publisher->email); ?></p>
                <p class="card-text">Phone : <?php echo e($publisher->phone); ?></p>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\william\Desktop\UAS\Semester 5\Web Programming\uts\resources\views/pages/publisherdetail.blade.php ENDPATH**/ ?>