<head>
    <meta charset="UTF-8"/>
    <meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0" name="viewport">
    <meta name="twitter:widgets:theme" content="light">
    <meta property="og:title" content="<?php echo e(translate($data->title)); ?>"/>
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="media/favicon.png"/>
    <meta property="og:description" content="<?php echo e(translate($data->meta)); ?>"/>
    <title><?php echo e(translate($data->title)); ?></title>
    <meta name="description" content="<?php echo e(translate($data->meta)); ?>"/>
    <link rel="shortcut icon" type="image/x-icon" href="media/favicon.png">

    <link rel="stylesheet" href="css/footer-slider.css">

    <!-- Font -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CRaleway:100,300,400,500,700' rel='stylesheet' type='text/css'>

    <!-- Css -->
    <link rel="stylesheet" href="/css/core.min.css"/>
    <link rel="stylesheet" href="/css/skin.css"/>
    <link rel="stylesheet" href="/css/style.css"/>

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <?php if(env('APP_DEBUG')): ?>
    <script type="text/javascript">
        document.write('<script src="//localhost:35729/livereload.js?snipver=1" type="text/javascript"><\/script>')
    </script>
    <?php endif ?>

    <!--[if lt IE 9]>
    <script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <base href="/">

    <?php echo isset($settings->widget->chatra) ? $settings->widget->chatra : ''; ?>


    <?php /*<?php if(isset($settings['plugin/chatra']) AND $settings['plugin/chatra'] != ''): ?>*/ ?>
<!-- Chatra {literal} -->
    <script>

        var errors = {
            username: [
                'Already in use'
            ],
            email: [
                    'Duplicate email'
            ]
        };

        for (var index in errors) {
            if (errors.hasOwnProperty(index)) {
                console.log(index);
                console.log(errors[index][0]);
            }
        }

        <?php /*ChatraID = '<?php echo e($settings['plugin/chatra']); ?>';*/ ?>
                ChatraID = 'iqFxHHaSmXuBgvjSe';
        (function (d, w, c) {
            var n = d.getElementsByTagName('script')[0],
                    s = d.createElement('script');
            w[c] = w[c] || function () {
                        (w[c].q = w[c].q || []).push(arguments);
                    };
            s.async = true;
            s.src = (d.location.protocol === 'https:' ? 'https:' : 'http:')
                    + '//call.chatra.io/chatra.js';
            n.parentNode.insertBefore(s, n);
        })(document, window, 'Chatra');
    </script>
    <!-- /Chatra {/literal} -->
    <?php /*<?php endif; ?>*/ ?>

    <?php /*<?php if(isset($settings['plugin/ganalytics']) AND $settings['plugin/ganalytics'] != ''): ?>*/ ?>
<!-- Google Analytics -->
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                        (i[r].q = i[r].q || []).push(arguments)
                    }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        <?php /*ga('create', '<?php echo e($settings['plugin/ganalytics']); ?>', 'auto');*/ ?>
        ga('create', 'UA-78522615-1', 'auto');
        ga('send', 'pageview');
    </script>
    <!-- /Google Analytics -->
    <?php /*<?php endif; ?>*/ ?>

    <script type="text/javascript" src="http://hotelsitecontents.fastbooking.com/js/fb.js"></script>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">

</head>
