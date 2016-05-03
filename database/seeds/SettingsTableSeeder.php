<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $settings_json = json_decode(File::get(storage_path("json/settings.json")));
        $settings_group = $settings_json->groups;
        $settings = $settings_json->data;

        foreach ($settings_group as $group) {
            \App\ConfGroup::create([
                "order" => $group->order,
                "key" => $group->key,
                "title" => $group->title
            ]);
        }

        foreach ($settings as $setting) {
            \App\Conf::create([
                "title" => $setting->title,
                "key" => $settings->key,
                "value" => $settings->value,
                "config_group_id" => $settings->config_group_id
            ]);
        }
    }
}
