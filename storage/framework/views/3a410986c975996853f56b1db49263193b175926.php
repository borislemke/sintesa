<!-- module: lightbox.gallery_column -->
<div class="section-block portfolio-5 small-margins bkg-grey-ultralight">
    <div class="row">
        <?php if(isset($module->data->title->{locale()}) AND $module->data->title->{locale()} != ''): ?>
            <h3 style="margin: 40px 12px;"><?php echo e($module->data->title->{locale()}); ?></h3>
        <?php endif; ?>
        <div class="column width-12">
            <?php /* masonry-grid */ ?>
            <div id="grid-1" class="row content-grid-4 fade-in-progressively" data-grid-ratio="1">
                <?php $i = 0 ?>
                <?php foreach($module->data as $item): ?>
                    <div class="grid-item <?php echo e($i == 0 ? ' grid-sizer' : ''); ?> portrait">
                        <div class="thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="500"
                             data-hover-bkg-color="#e5e7e9" data-hover-bkg-opacity=".98">
                            <a class="overlay-link lightbox-link" data-group="project-1"
                               data-caption="<?php echo e($item->title->{locale()}); ?>"
                               data-image-url="media<?php echo e($item->image->src); ?>"
                               href="media/<?php echo e($item->image->src); ?>" data-lightbox-animation="slideInBottom">
                                <img src="media/<?php echo e($item->image->src); ?>" alt="<?php echo e($item->image->alt); ?>"/>
							<span class="overlay-info center">
								<span>
									<span>
										<span class="left inline">
											<span class="project-title"><?php echo e($item->title->{locale()}); ?></span>
										</span>
									</span>
								</span>
							</span>
                            </a>
                        </div>
                    </div>
                    <?php $i++ ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<!-- module_end: lightbox.gallery_column -->
