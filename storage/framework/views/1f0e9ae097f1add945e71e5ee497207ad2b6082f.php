<!-- module: text.about -->
<div class="section-block">
    <div class="row">
        <div class="column width-10 offset-1">
            <div class="column width-4">
                <h2 class=""><?php echo e(translate($module->data->title)); ?></h2>
                <p class="lead"><em><?php echo translate($module->data->lead); ?></em></p>
            </div>
            <div class="column width-4">
                <?php if(isset($module->data->description_one) && translate($module->data->description_one) != ""): ?>
                <?php echo translate($module->data->description_one); ?>

                <?php endif; ?>
            </div>
            <div class="column width-4">
                <?php if(isset($module->data->description_two) && translate($module->data->description_two) != ""): ?>
                <?php echo translate($module->data->description_two); ?>

                <?php endif; ?>
            </div>


            <?php if(FALSE): ?>
                <ul class="social-list list-horizontal">
                    <li>
                        <a onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=' + location.href, 'sharer', 'width=626,height=436');"
                           href="javascript: void(0)" title="Share on Facebook"><span
                                    class="icon-facebook small"></span></a></li>
                    <li>
                        <a onclick="popUp=window.open('https://twitter.com/share?url=Your-Site-Url', 'popupwindow', 'scrollbars=yes,width=800,height=400');popUp.focus();return false;"
                           href="javascript: void(0)" title="Share on Twitter"><span class="icon-twitter small"></span></a>
                    </li>
                    <li>
                        <a onclick="popUp=window.open('http://pinterest.com/pin/create/button/?url=Your-Site-Url&amp;media=Your-Image-Url&amp;description=Your-Image-Description', 'popupwindow', 'scrollbars=yes,width=800,height=400');popUp.focus();return false;"
                           href="javascript: void(0)" title="Pin on Pinterest"><span
                                    class="icon-pinterest small"></span></a></li>
                    <li>
                        <a onclick="popUp=window.open('https://plus.google.com/share?url=Your-Site-Url', 'popupwindow', 'scrollbars=yes,width=800,height=400');popUp.focus();return false;"
                           href="javascript: void(0)" title="Share on Google Plus"><span
                                    class="icon-google small"></span></a></li>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</div>
<!-- module_end: text.about -->
