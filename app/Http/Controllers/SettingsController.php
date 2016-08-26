<?php

namespace App\Http\Controllers;

use File;
use App\Paper;
use App\SystemLanguage;
use Illuminate\Filesystem\FilesystemManager;
use Illuminate\Http\Request;

use App\Http\Requests;

class SettingsController extends Controller
{
    //
    public function makeDefaultLanguage(Request $request)
    {
        $old_default = SystemLanguage::where('is_default', 1)->first();
        $old_default->is_default = 0;

        if ($old_default->save()) {

            $new_default = SystemLanguage::where('code', $request->code)->first();
            $new_default->is_default = 1;

            if ($new_default->save()) {
                return [
                    'status' => 200,
                    'status-text' => 'success',
                    'monolog' => [
                        'title' => 'Language update',
                        'message' => $new_default->title . ' is now the current default language'
                    ]
                ];
            }
        }

        return [
            'status' => 500,
            'status-text' => 'success',
            'monolog' => [
                'title' => 'System language',
                'message' => 'Something went wrong updating the system language'
            ]
        ];
    }

    public function indexLanguages()
    {
        $addable_language = json_decode(File::get(storage_path('json/languages.json')), TRUE);
        $system_languages = SystemLanguage::all();

        $sysLangs = [];
        foreach ($system_languages as $sysLang) {
            $sysLangs[] = $sysLang->code;
        }

        foreach ($addable_language as $code => $lang) {
            if (in_array($code, $sysLangs)) {
                unset($addable_language[$code]);
            }
        }

        return response()->json([
            'system_languages' => SystemLanguage::all(),
            'languages' => $addable_language
        ]);
    }

    public function addLanguage(Request $request)
    {
        $code = $request->code;
        $title = $request->title;

        $new_lang = new SystemLanguage();
        $new_lang->code = $code;
        $new_lang->title = $title;

        if ($new_lang->save()) {
            return [
                'status' => 200,
                'status-text' => 'success',
                'monolog' => [
                    'title' => 'System language',
                    'message' => $title . " has been added to the system"
                ]
            ];
        } else {
            return [
                'status' => 500,
                'status-text' => 'error',
                'monolog' => [
                    'title' => 'System language',
                    'message' => "Something went wrong adding the system language. Refresh adn try again. If the issue persists, contact your developer."
                ]
            ];
        }
    }

    public function removeLanguage(Request $request)
    {
        $code = $request->code;

        $lang = SystemLanguage::where('code', $code)->first();

        if ($lang->is_default == 1) {
            return [
                'status' => 500,
                'status-text' => 'error',
                'monolog' => [
                    'title' => 'System language',
                    'message' => "Cannot remove default language. This is most likely a bug so please contact your developer and report this issue."
                ]
            ];
        }

        if ($lang->delete()) {
            return [
                'status' => 200,
                'status-text' => 'success',
                'monolog' => [
                    'title' => 'System language',
                    'message' => $lang->title . " has been deleted from the system"
                ]
            ];
        } else {
            return [
                'status' => 500,
                'status-text' => 'error',
                'monolog' => [
                    'title' => 'System language',
                    'message' => "Something went wrong removing the system language. Refresh and try again. If the issue persists, contact your developer."
                ]
            ];
        }
    }

    public function doctor()
    {
        $pages = Paper::all();

        $pagesData = [];
        foreach ($pages as $page) {
            $pagesData[] = [
                "page" => $page->title,
                "content" => json_decode($page->content)
            ];
        }

        echo "<pre>";
        foreach ($pagesData as $pData) {
            $module_order = [$pData["page"]];
            foreach ($pData["content"] as $module) {
                if (in_array($module->order, $module_order)) dd($pData["content"]);
                if ($module->order) $module_order[] = $module->order;
                else $module_order[] = [
                    "error_on" => $module
                ];
            }
            var_dump($module_order);
            echo "<br><br>";
        }
        echo "<pre>";
    }
}
