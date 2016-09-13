<!DOCTYPE html>
<html lang="en">

<?php echo $__env->make('layout.head', compact('data'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<body class="home-page <?php echo e($data->bodyclass); ?>">

    <!-- Overlay Navigation Menu -->
    <div class="overlay-navigation-wrapper">
        <div class="overlay-navigation-inner">
            <div class="overlay-navigation-header row collapse full-width">
                <div class="column width-12">
                    <div id="overlay-nav-hide" class="navigation-hide">
                        <a href="#">
                <span class="icon-cancel"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row collapse full-width">
                <div class="column width-12">
                    <nav class="overlay-navigation pull-left clear-float-on-mobile">
                        <ul>

                            <?php foreach($navigation->children as $nav): ?>
                            <li class="">
                                <a href="<?php echo e($nav->no_link ? Request::path() . '#' : ($nav->url_type != 'external' ? route($nav->url_type, ['url' => $nav->url]) : $nav->url)); ?>" class="<?php echo e(count($nav->children) && $nav->url != 'accommodation' ? 'contains-sub-menu' : ''); ?>"><?php echo e($nav->title); ?></a>
                                <?php if(isset($nav->children) AND $nav->children AND $nav->url != 'accommodation'): ?>
                                <ul class="sub-menu">
                                    <?php foreach($nav->children as $child): ?>
                                    <li class="<?php echo e(count($child->children) ? 'contains-sub-menu' : ''); ?>">
                                        <a href="<?php echo e($child->no_link ? Request::path() . '#' : ($child->url_type != 'external' ? route($child->url_type, ['url' => $child->url]) : $child->url)); ?>" class="<?php echo e($child->no_link ? 'disable-linkeffect' : ''); ?>"><?php echo e($child->title); ?></a>

                                        <?php if(isset($child->children) AND $child->children): ?>
                                        <ul class="sub-menu">
                                            <?php foreach($child->children as $_child): ?>
                                            <li>
                                                <a href="<?php echo e($_child->no_link ? Request::path() . '#' : ($_child->url_type != 'external' ? route($_child->url_type, ['url' => $_child->url]) : $_child->url)); ?>" class="<?php echo e($_child->no_link ? 'disable-linkeffect' : ''); ?>"><?php echo e($_child->title); ?></a>
                                            </li>
                                            <?php endforeach; ?>
                                        </ul>
                                        <?php endif; ?>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                                <?php endif; ?>
                            </li>
                            <?php endforeach; ?>
                            <!--
                            <li class="current"><a href="<?php echo e(route('home')); ?>">Home</a></li>
                            <li><a href="<?php echo e(route('page', ['url' => 'accomodation'])); ?>">Accommodation</a></li>
                            <li><a href="#" class="contains-sub-menu disabled">Food &amp; Beverage</a>
                                <ul class="sub-menu">
                                    <li><a href="<?php echo e(route('page', ['url' => 'angin-angin'])); ?>">Angin Angin</a></li>
                                    <li><a href="<?php echo e(route('page', ['url' => 'barber'])); ?>">The BARber</a></li>
                                    <li><a href="<?php echo e(route('page', ['url' => 'healthy-corner'])); ?>">The Healthy Corner (Coming Soon)</a></li>
                                    <li><a href="<?php echo e(route('page', ['url' => 'rooftop'])); ?>">The Rooftop (Coming Soon)</a></li>
                                </ul>
                            </li>
                            <li><a href="<?php echo e(route('page', ['url' => 'the-wellness-center'])); ?>" class="contains-sub-menu">Wellness</a>
                                <ul class="sub-menu">
                                    <li><a href="<?php echo e(route('page', ['url' => 'spa-treatment'])); ?>">Spa Treatment</a></li>
                                    <li><a href="<?php echo e(route('page', ['url' => 'wellness-activity'])); ?>">Wellness Activity</a>
                                    </li>
                                    <li><a href="<?php echo e(route('page', ['url' => 'the-gym'])); ?>">The Gym</a></li>
                                </ul>
                            </li>
                            <li><a href="#" class="contains-sub-menu disabled">Facilities</a>
                                <ul class="sub-menu">
                                    <li><a href="<?php echo e(route('page', ['url' => 'kids-creative-room'])); ?>">Kids Creative Room</a></li>
                                    <li><a href="<?php echo e(route('page', ['url' => 'swimming-pools'])); ?>">Swimming Pools</a></li>
                                </ul>
                            </li>
                            <li><a href="#" class="contains-sub-menu disabled">Events &amp; Wedding</a>
                                <ul class="sub-menu">
                                    <li><a href="<?php echo e(route('page', ['url' => 'meeting-package'])); ?>">Meeting Package</a></li>
                                    <li><a href="<?php echo e(route('page', ['url' => 'events'])); ?>">Events</a></li>
                                    <li><a href="<?php echo e(route('page', ['url' => 'the-wedding'])); ?>">The Wedding</a></li>
                                </ul>
                            </li>
                            -->
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="overlay-navigation-footer row full-width">
                <div class="column width-12 no-padding">
                    <p class="copyright no-margin-bottom">&copy; 2016 The Sintesa Jimbaran. All Rights Reserved. Website by
                    <a href="http://fleava.com" target="_blank">Fleava</a>.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Overlay Navigation Menu End -->

    <div class="wrapper">
        <div class="wrapper-inner">

            <?php echo $__env->make('sprites', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <!-- Header -->
            <header class="header-1 header header-fixed-on-mobile" data-bkg-threshold="100" data-compact-threshold="100">
                <div class="header-inner">
                    <div class="row nav-bar reveal-side-navigation">
                        <div class="column width-12 nav-bar-inner">
                            <div id="overlay-nav-show" class="navigation-show hide">
                                <a href="#">
                                    <span class="icon-menu medium"></span>
                                </a>
                            </div>
                            <div class="logo">
                                <div class="logo-inner">
                                    <a href="<?php echo e(route('home')); ?>">
                                        <svg class="">
                                            <use xlink:href="<?php echo e(Request::path()); ?>#fleava-logo-sintesa-alt"></use>
                                        </svg>
                                    </a>
                                    <a href="<?php echo e(route('home')); ?>">
                                        <svg class="">
                                            <use xlink:href="<?php echo e(Request::path()); ?>#fleava-logo-sintesa"></use>
                                        </svg>
                                    </a>
                                </div>
                            </div>

                            <?php echo $__env->make('includes.booking-bar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


                            <nav class="navigation">
                                <ul>
                                    <?php foreach($navigation->children as $nav): ?>
                                    <li>
                                        <a href="<?php echo e($nav->no_link ? Request::path() . '#' : ($nav->url_type != 'external' ? route($nav->url_type, ['url' => $nav->url]) : $nav->url)); ?>" class="<?php echo e($nav->no_link ? 'disable-linkeffect' : ''); ?>"><?php echo e($nav->title); ?></a>
                                        <?php if(isset($nav->children) AND $nav->children AND $nav->url): ?>
                                        <ul class="sub-menu">
                                            <?php foreach($nav->children as $child): ?>
                                            <li class="<?php echo e(count($child->children) ? 'contains-sub-menu' : ''); ?>">
                                                <a href="<?php echo e($child->no_link ? Request::path() . '#' : ($child->url_type != 'external' ? route($child->url_type, ['url' => $child->url]) : $child->url)); ?>" class="<?php echo e($child->no_link ? 'disable-linkeffect' : ''); ?>"><?php echo e($child->title); ?></a>

                                                <?php if(isset($child->children) AND $child->children): ?>
                                                <ul class="sub-menu">
                                                    <?php foreach($child->children as $_child): ?>
                                                    <li>
                                                        <a href="<?php echo e($_child->no_link ? Request::path() . '#' : ($_child->url_type != 'external' ? route($_child->url_type, ['url' => $_child->url]) : $_child->url)); ?>" class="<?php echo e($_child->no_link ? 'disable-linkeffect' : ''); ?>"><?php echo e($_child->title); ?></a>
                                                    </li>
                                                    <?php endforeach; ?>
                                                </ul>
                                                <?php endif; ?>
                                            </li>
                                            <?php endforeach; ?>
                                        </ul>
                                        <?php endif; ?>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Header End -->

            <!-- Content -->
            <div class="content clearfix reveal-side-navigation">

                <?php echo $__env->yieldContent('content', ''); ?>

                <?php if(false): ?>
                <!-- Signup Modal End -->
                <div id="signup-lightbox" class="signup-1 pt-70 pb-50 hide">
                    <div class="row">
                        <div class="column width-12 left">
                            <div class="signup-form-container">
                                <div class="row">
                                    <div class="column width-5">
                                        <h2 class="mb-30">Get The Latest From Sartre</h2>
                                        <p>Stay cool and creative with our latest creative news. And don't worry, we do not spam!</p>
                                    </div>
                                    <div class="column width-6 offset-1">
                                        <form class="signup-form" action="php/subscribe.php" method="post" novalidate>
                                            <div class="row">
                                                <div class="column width-12">
                                                    <div class="field-wrapper">
                                                        <input type="text" name="fname" class="form-name form-element large"
                                                        placeholder="First Name" tabindex="1" required>
                                                    </div>
                                                </div>
                                                <div class="column width-12">
                                                    <div class="field-wrapper">
                                                        <input type="email" name="email"
                                                        class="form-email form-element large"
                                                        placeholder="Email address" tabindex="2" required>
                                                    </div>
                                                </div>
                                                <div class="column width-12">
                                                    <input type="submit" value="Signup"
                                                    class="form-submit button text-uppercase bkg-charcoal bkg-hover-pink color-white color-hover-white">
                                                </div>
                                            </div>
                                            <input type="text" name="honeypot" class="form-honeypot form-element">
                                        </form>
                                        <div class="form-response"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Signup Modal End -->
                <?php endif; ?>

            </div>
            <!-- Content End -->

            <?php echo $__env->make('layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        </div>
    </div>

    <?php echo $__env->make('modules.plugins.popup', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!-- Js -->
<script>
    /*
     $(function() {
     $('.datepicker').datepicker();
     });
     */
 </script>
 <?php /*<script src="http://maps.googleapis.com/maps/api/js?v=3"></script>*/ ?>
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCvbZed0XBhy8tgs-2OgoZoO8tHqO33SUw&callback=initMap" async
 defer></script>
 <script src="/js/timber.master.min.js"></script>
 <script src="/js/template-functions.js"></script>
</body>
</html>
