<!-- module: text.title_subtitle -->
<section id="about" class="section-block center bkg-white <?php echo e($module->config->pattern ? 'bkg-pattern' : ''); ?>">
    <div class="row">
        <div class="column width-8 offset-2">
            <div class="horizon" data-animate-in="opacity:0;transX:50;duration:1000;easing:easeFastSlow;" data-threshold="0.5">
                <h2 class="mb-40"><?php echo e($module->data->title->{locale()}); ?></h2>
                <p class="sublead"><?php echo e($module->data->subtitle->{locale()}); ?></p>
                <?php echo $module->data->text->{locale()}; ?>

            </div>
        </div>
        <div class="column width-5">

        </div>
    </div>
</section>
<!-- module_end: text.title_subtitle -->
