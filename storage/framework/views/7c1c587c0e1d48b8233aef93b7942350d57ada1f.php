<!-- module: parallax.custom_barber -->
<div class="section-block parallax fixed-height bkg-black" data-src="media/<?php echo e($module->data->background); ?>"
     style="height:500px">
    <div class="tmp-content">
        <div class="tmp-content-inner left">
            <div class="row">
                <div class="column width-3 offset-1 left center-on-mobile color-white">
                    <h1 class="hominis title-xlarge"><?php echo e(translate($module->data->title)); ?></h1>
                    <h3 class="title-medium"><?php echo e(translate($module->data->description)); ?></h3>
                    <a href="<?php echo e($module->data->button->link->url); ?>" class="button border-white color-white"><?php echo e(translate($module->data->button->text)); ?></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- module_end: parallax.custom_barber -->
