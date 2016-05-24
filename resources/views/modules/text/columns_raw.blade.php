<!-- module: text.columns_raw -->
<section class="section-block replicable-content">
    <div class="row">
        <div class="three-column-text-wrapper">
            <style>

            </style>
            <div class="column width-10 offset-1 raw-column-wrapper">
                @foreach($module->data as $column_data)
                    <div class="column width-{{ (12 / count($module->data)) }} pb-120">
                        {!! $column_data !!}
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- module_end: text.columns_raw -->
