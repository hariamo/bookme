
<?php $__env->startSection('head'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <h2 class="title-bar">
        <?php echo e(!empty($recovery) ?__('Recovery Activities') : __("Manage Activities")); ?>

        <?php if(Auth::user()->hasPermissionTo('activity_create') && empty($recovery)): ?>
            <a href="<?php echo e(route("activity.vendor.create")); ?>" class="btn-change-password"><?php echo e(__("Add Activity")); ?></a>
        <?php endif; ?>
    </h2>
    <?php echo $__env->make('admin.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php if($rows->total() > 0): ?>
        <div class="bravo-list-item">
            <div class="bravo-pagination">
                <span class="count-string"><?php echo e(__("Showing :from - :to of :total Activities",["from"=>$rows->firstItem(),"to"=>$rows->lastItem(),"total"=>$rows->total()])); ?></span>
                <?php echo e($rows->appends(request()->query())->links()); ?>

            </div>
            <div class="list-item">
                <div class="row">
                    <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-12">
                            <?php echo $__env->make('Activity::frontend.manageActivity.loop-list', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <div class="bravo-pagination">
                <span class="count-string"><?php echo e(__("Showing :from - :to of :total Activities",["from"=>$rows->firstItem(),"to"=>$rows->lastItem(),"total"=>$rows->total()])); ?></span>
                <?php echo e($rows->appends(request()->query())->links()); ?>

            </div>
        </div>
    <?php else: ?>
        <div class="panel px-5 py-4">
            <?php echo e(__("No Activities")); ?>

        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/Work/works/tjdjoko/Vargha-Booking/codes/booking-core/modules/Activity/Views/frontend/manageActivity/index.blade.php ENDPATH**/ ?>