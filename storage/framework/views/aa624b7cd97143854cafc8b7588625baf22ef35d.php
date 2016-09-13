<!-- module: sliders.testimony -->
<div class="section-block testimonial-5 testimonials-5-about-1 bkg-grey-ultralight" style="text-align: center;">
    <div class="row">
        <div class="column width-8 offset-2 center">
            <h2 class="mb-30"><?php echo e($module->config->title->{locale()}); ?></h2>
        </div>
    </div>
    <div id="testimonial-slider-1" class="testimonial-slider tm-slider-container">
        <ul class="tms-slides">

            <?php foreach($module->data as $testimony): ?>
                <li class="tms-slide" data-image>
                    <div class="tms-content-scalable">
                        <div class="row">
                            <div class="column width-8 offset-2">
                                <blockquote class="center large">
                                    <p><?php echo $testimony->text; ?></p>
                                    <cite><?php echo $testimony->source; ?></cite>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>

        </ul>
    </div>

    <a data-toolbar="" data-modal-mode="" data-modal-width="80%" data-content="inline" class="button text-uppercase lightbox-link" href="#review-modal" style="margin: 0; margin-top: 3em;">SEE ALL REVIEWS</a>
</div>

<style>
    .smartling-notranslate.smartling-notranslate-div > div:nth-child(2) { display: none; }
</style>
<div class="review-modal" id="review-modal" style="padding:30px;display:none;">
    <div class="testimony-popup">
        <script type="text/javascript">
            var revinate_params = {};
            revinate_params.color_text = "#000000";
            revinate_params.color_text_secondary = "#666666";
            revinate_params.color_link = "#6a8ca4";
            revinate_params.color_border = "#eeeeee";
            revinate_params.color_bg = "#ffffff";
            revinate_params.color_bg_secondary = "#fefef9";
        </script>
        <script type="text/javascript" src="https://app.revinate.com/social-buzz-widget/2120"></script>
    </div>
</div>
<!-- module_end: sliders.testimony -->
