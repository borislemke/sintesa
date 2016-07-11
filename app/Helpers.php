<?php

function locale()
{
    return config('app.locale');
}

function default_locale()
{
    $system_default = \App\SystemLanguage::where('is_default', 1)->first();
    if ($system_default) return $system_default->code;
    return 'en';
}

function match_locale()
{
    if (Schema::hasTable('system_languages')) {
        // Get's the full request path
        $current_path = Request::path();
        $path_chunks = explode('/', $current_path);
        $system_default = \App\SystemLanguage::where('is_default', 1)->first();

        // Get's the first URL chunk: http://somedomain.com/blah/bluh/blob -> 'blah'
        $lang_selector = $path_chunks[0];
        if (strlen($lang_selector) == 2) {
            $locale_match = \App\SystemLanguage::where('code', $lang_selector)->first();
            if ($locale_match) {
                config(['app.locale' => $locale_match->code]);
                return TRUE;
            }
        }

        if ($system_default) return config(['app.locale' => $system_default->code]);
        else return config(['app.locale' => 'en']);
    } else {
        return config(['app.locale' => 'en']);
    }
}

function translate($translatable_object)
{
    if (isset($translatable_object->{locale()})) return $translatable_object->{locale()};
    return $translatable_object->{default_locale()};
}
