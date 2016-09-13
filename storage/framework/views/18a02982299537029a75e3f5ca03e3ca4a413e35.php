<!-- module: custom.accommodation_promo -->
<!--
DATES
<?php

// Best: today until tomorrow
$today = date('Y-n-j');
$tomorrow = Date('Y-n-j', strtotime("+1 days"));
$day_after_tomorrow = Date('Y-n-j', strtotime("+2 days"));
// Advance Purchase: two days starting today in a week
$one_week_from_today = Date('Y-n-j', strtotime("+7 days"));
$two_days_after_one_week_from_today = Date('Y-n-j', strtotime("+9 days"));
// Early bird: two days starting today in 30 days
$thirty_days_from_today = Date('Y-n-j', strtotime("+31 days"));
$two_days_after_thirty_days_from_today = Date('Y-n-j', strtotime("+33 days"));
// Long stay promotion: 5 days duration minimum
$five_days_from_today = Date('Y-n-j', strtotime("+6 days"));

echo "today: " . $today . "\n";
echo "tomorrow: " . $tomorrow . "\n";
echo "one_week_from_today: " . $one_week_from_today . "\n";
echo "two_days_after_one_week_from_today: " . $two_days_after_one_week_from_today . "\n";
echo "thirty_days_from_today: " . $thirty_days_from_today . "\n";
echo "two_days_after_thirty_days_from_today: " . $two_days_after_thirty_days_from_today . "\n";
echo "five_days_from_today: " . $five_days_from_today . "\n";

$dates = [
        "https://www.book-secure.com/index.php?s=results&arrival=" . $one_week_from_today . "&departure=" . $two_days_after_one_week_from_today . "&property=idbal28401&rooms=1&locale=en_GB&currency=IDR&stid=3gthgk0hl&adults1=2",
        "https://www.book-secure.com/index.php?s=results&arrival=" . $today . "&departure=" . $day_after_tomorrow . "&property=idbal28401&rooms=1&locale=en_GB&currency=IDR&stid=3gthgk0hl&adults1=2",
        "https://www.book-secure.com/index.php?s=results&arrival=" . $thirty_days_from_today . "&departure=" . $two_days_after_thirty_days_from_today . "&property=idbal28401&rooms=1&locale=en_GB&currency=IDR&stid=3gthgk0hl&adults1=2",
        "https://www.book-secure.com/index.php?s=results&arrival=" . $tomorrow . "&departure=" . $five_days_from_today . "&property=idbal28401&rooms=1&locale=en_GB&currency=IDR&stid=3gthgk0hl&adults1=2"
];
?>
        /DATES
        -->
<div class="section-block portfolio-5 small-margins bkg-pattern">
    <div class="row">
        <div class="column width-3 offset-1">
            <h2 class="mb-20"><?php echo e(translate($module->config->header->title)); ?></h2>
            <p><?php echo translate($module->config->header->description); ?></p>
        </div>
        <div class="column width-7">
            <div id="grid-1" class="row content-grid-2 masonry-grid fade-in-progressively" data-grid-ratio="1">
                <?php $i = 0 ?>
                <?php foreach($module->data as $item): ?>
                    <div class="grid-item <?php echo e($i == 0 ? ' grid-sizer' : ''); ?>">
                        <div class="thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="500"
                             data-hover-bkg-color="#e5e7e9" data-hover-bkg-opacity=".98">
                            <a data-toolbar="Promotion" data-group="project-1" data-caption="<?php echo e($item->title); ?>"
                               data-image-url="media/<?php echo e($item->image->src); ?>"
                               href="<?php echo e($dates[$i]); ?>" target="_blank" data-lightbox-animation="slideInBottom">
                                <img src="media/<?php echo e($item->image->src); ?>" alt="<?php echo e($item->image->alt); ?>"/>
							<span class="overlay-info center">
								<span>
									<span>
										<span class="left inline">
											<span class="project-title"><?php echo e($item->title); ?></span>
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
<!-- module_end: custom.accommodation_promo -->
