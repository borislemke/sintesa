<!-- module: text.columns_raw -->
<section class="section-block replicable-content bkg-gold color-white">
    <div class="row">
        <div class="raw-column-wrapper">
            <style>

            </style>
            <div class="column width-10 offset-1 raw-column-wrapper">
                <?php foreach($module->data as $column_data): ?>
                    <div class="column width-<?php echo e((12 / count($module->data))); ?>">
                        <?php echo $column_data; ?>

                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<!-- module_end: text.columns_raw -->
