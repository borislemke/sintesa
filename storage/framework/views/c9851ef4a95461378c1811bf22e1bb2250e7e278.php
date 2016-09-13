<!-- module: mixed.page_intro_alt -->
<style>
    .section-block .three-column-text-wrapper .column p {
        margin-bottom: 8px;
    }
    .section-block .three-column-text-wrapper .column ul {
        list-style: disc;
        padding-left: 24px;
        margin-bottom: 8px;
    }
</style>
<section class="section-block bkg-gold color-white no-padding-bottom">
    <div class="row">
        <div class="three-column-text-wrapper">
            <div class="column width-10 offset-1 pb-mobile-50">
                <?php foreach($module->data->columns as $column): ?>
                    <div class="column width-<?php echo e((12 / count($module->data->columns))); ?> pb-120">
                        <?php echo $column; ?>

                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<section class="section-block bkg-white no-padding-top">
    <div class="row">
        <div class="column width-8 offset-2 push-up">
            <img src="media/<?php echo e($module->data->image_wide->src); ?>" class="horizon"
                 data-animate-in="opacity:0;transY:50;duration:1000;easing:easeFastSlow;"
                 data-threshold="0.5" alt="<?php echo e($module->data->image_wide->alt); ?>"/>
        </div>
        <div class="column width-6 offset-2">
            <div class="horizon" data-animate-in="opacity:0;transX:50;duration:1000;easing:easeFastSlow;"
                 data-threshold="0.5">
                <p class="pt-50"><?php echo $module->data->intro; ?></p>
            </div>
        </div>
        <div class="column width-3 push-up mt-mobile-50 hide-on-mobile">
            <img src="media/<?php echo e($module->data->image_square->src); ?>" class="bordered horizon"
                 data-animate-in="opacity:0;transY:50;duration:1000;easing:easeFastSlow;"
                 data-threshold="0.5" alt="<?php echo e($module->data->image_square->src); ?>"/>
        </div>
    </div>
</section>
<!-- module_end: mixed.page_intro_alt -->
