<!-- module: mixed.three_column_header -->
<section class="section-block bkg-white bkg-pattern">
    <div class="row">
        <div class="three-column-text-wrapper">
            <div class="column width-10 offset-1">

                <div class="column width-6 offset-4 pb-30">
                    <?php if(isset($module->data->title->{locale()}) && $module->data->title->{locale()} != ''): ?>
                        <h2 class=""><?php echo e(translate($module->data->title)); ?></h2>
                    <?php endif; ?>

                    <p class="lead"><em><?php echo e(translate($module->data->heading)); ?></em></p>
                </div>

            </div>
        </div>
    </div>
</section>
<section class="section-block replicable-content bkg-grey-ultralight small-margins no-padding-top">
    <div class="row">
        <div class="column width-10 push-1 slider-column no-padding push-up">
            <div id="team-slider-1" class="tm-slider-container team-slider team-slider-1 " data-carousel-visible-slides="3" data-height="500">

                <ul class="tms-slides">
                    <?php foreach($module->data->gallery as $slide): ?>
                        <li class="tms-slide">
                            <div class="thumbnail" data-hover-easing="easeInOut" data-hover-speed="500" data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.9">
                                <a href="<?php echo e($slide->link->url); ?>" title="<?php echo e($slide->banner->alt); ?>"><img data-src="media/<?php echo e($slide->banner->src); ?>" src="media/<?php echo e($slide->banner->src); ?>" width="760" height="500" alt="<?php echo e($slide->banner->alt); ?>"/></a>
                            </div>
                            <div class="team-content-info">
                                <h4 class="mb-20"><a href="<?php echo e($slide->link->url); ?>"><?php echo e(translate($slide->title)); ?></a></h4>
                                <p><?php echo e(translate($slide->text)); ?></p>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- module_end: mixed.three_column_header -->
