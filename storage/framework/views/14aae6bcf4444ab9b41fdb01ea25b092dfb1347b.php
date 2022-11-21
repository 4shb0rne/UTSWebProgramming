<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-evenly p-3 flex-wrap">
        <?php $__currentLoopData = $publishers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $publisher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card mt-5" style="width: 18rem;">
                <img src="<?php echo e(asset('storage/Assets/' . $publisher->image)); ?>" class="card-img-top" style="min-height: 250px">
                <div class="card-body">
                    <h5 class="card-title"><?php echo e($publisher->name); ?></h5>
                    <p class="card-text">Address : <?php echo e($publisher->address); ?></p>
                    <p class="card-text">Phone : <?php echo e($publisher->phone); ?></p>
                    <p class="card-text">Email : <?php echo e($publisher->email); ?></p>
                </div>
                <div class="card-footer">
                    <a href=<?php echo e('/publisherdetail/' . $publisher->id); ?> class="btn btn-primary">Detail</a>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\william\Desktop\UAS\Semester 5\Web Programming\uts\resources\views/pages/publisherlist.blade.php ENDPATH**/ ?>