
<?php $__env->startSection('head'); ?>
    <link href="<?php echo e(asset('dist/frontend/module/sauna/css/sauna.css?_ver='.config('app.version'))); ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset("libs/ion_rangeslider/css/ion.rangeSlider.min.css")); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset("libs/fotorama/fotorama.css")); ?>"/>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="bravo_detail_sauna">
        <?php echo $__env->make('Sauna::frontend.layouts.details.banner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="bravo_content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-9">
                        <?php $review_score = $row->review_data ?>
                        <?php echo $__env->make('Sauna::frontend.layouts.details.detail', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php echo $__env->make('Sauna::frontend.layouts.details.review', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                    <div class="col-md-12 col-lg-3">
                        <?php echo $__env->make('Tour::frontend.layouts.details.vendor', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php echo $__env->make('Sauna::frontend.layouts.details.form-book', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>
                <div class="row end_tour_sticky">
                    <div class="col-md-12">
                        <?php echo $__env->make('Sauna::frontend.layouts.details.related', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>
            </div>
        </div>
        <?php echo $__env->make('Sauna::frontend.layouts.details.form-book-mobile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
    <?php echo App\Helpers\MapEngine::scripts(); ?>

    <script>
        jQuery(function ($) {
            <?php if($row->map_lat && $row->map_lng): ?>
            new BravoMapEngine('map_content', {
                disableScripts: true,
                fitBounds: true,
                center: [<?php echo e($row->map_lat); ?>, <?php echo e($row->map_lng); ?>],
                zoom:<?php echo e($row->map_zoom ?? "8"); ?>,
                ready: function (engineMap) {
                    engineMap.addMarker([<?php echo e($row->map_lat); ?>, <?php echo e($row->map_lng); ?>], {
                        icon_options: {}
                    });
                }
            });
            <?php endif; ?>
        })
    </script>
    <script>
        var bravo_booking_data = <?php echo json_encode($booking_data); ?>

        var bravo_booking_i18n = {
			no_date_select:'<?php echo e(__('Please select Start and End date')); ?>',
            no_guest_select:'<?php echo e(__('Please select at least one number')); ?>',
            load_dates_url:'<?php echo e(route('sauna.vendor.availability.loadDates')); ?>'
        };
    </script>
    <script type="text/javascript" src="<?php echo e(asset("libs/ion_rangeslider/js/ion.rangeSlider.min.js")); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset("libs/fotorama/fotorama.js")); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset("libs/sticky/jquery.sticky.js")); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('module/sauna/js/single-sauna.js?_ver='.config('app.version'))); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home3/cdjofzdd/test.booking.dorica.fi/modules/Sauna/Views/frontend/detail.blade.php ENDPATH**/ ?>