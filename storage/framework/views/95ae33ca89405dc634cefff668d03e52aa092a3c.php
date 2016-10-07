<!-- module: parallax.call_to_action -->
<div class="section-block parallax fixed-height bkg-black" data-src="media/<?php echo e($module->data->background->src); ?>"
     style="height:300px">
    <div class="tmp-content">
        <div class="tmp-content-inner left">
            <div class="row">
                <div class="column width-6 offset-3 center color-white">
                    <h3 class=""><?php echo e(translate($module->data->title)); ?></h3>
                    <p class=""><?php echo e(translate($module->data->text)); ?></p>
                    <?php $link = $module->data->button->link->type == "internal" ? route('page', ['url' => $module->data->button->link->url]) : $module->data->button->link->url ?>
                    <a data-toolbar="" data-modal-mode="" data-modal-width="80%" data-content="inline"
                       class="button text-uppercase border-white bkg-hover-gold color-white color-hover-white mb-mobile-30 mt-30 lightbox-link"
                       href="<?php echo e($module->data->button->link->url); ?>">
                        <?php echo e(translate($module->data->button->text)); ?>

                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="enquire-popup-wrapper" id="modal-content" style="padding:30px;display:none;">

    <?php echo $__env->make('modules.parallax.forms.meeting', compact('module'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</div>
<!-- module_end: parallax.call_to_action -->
