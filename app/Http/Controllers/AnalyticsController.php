<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Analytics;
use File;
use Spatie\Analytics\Period;

class AnalyticsController extends Controller
{
    public function query($days = 13)
    {
        $days = intval($days);
        $country_sessions = Analytics::performQuery(Period::days($days), 'ga:sessions', [
            'dimensions' => 'ga:country',
            'sort' => '-ga:sessions',
            'max-results' => 8
        ]);
        $country_users = Analytics::performQuery(Period::days($days), 'ga:sessions', [
            'dimensions' => 'ga:userType,ga:country',
            'sort' => '-ga:sessions'
        ]);
        $traffic_source = Analytics::performQuery(Period::days($days), 'ga:sessions,ga:newUsers,ga:bounceRate,ga:pageviewsPerSession', [
            'dimensions' => 'ga:medium',
            'sort' => '-ga:sessions'
        ]);
        $device_category = Analytics::performQuery(Period::days(floor($days / 2)), 'ga:pageViews', [
            'dimensions' => 'ga:deviceCategory,ga:date',
            'sort' => 'ga:date'
        ]);
        $device_total = Analytics::performQuery(Period::days(floor($days / 2)), 'ga:sessions', [
            'dimensions' => 'ga:deviceCategory',
            'sort' => '-ga:sessions'
        ]);

        $mergedCountryData = $this->mergeCountryVisitors($country_sessions, $country_users);

        return response()->json([
            'country_data' => $this->nameCountries($mergedCountryData),
            'page_views' => $this->getPageViews($days),
            'traffic_source' => $this->labelSources($traffic_source->rows),
            'device_category' => $device_category->rows,
            'device_total' => $device_total->rows
        ]);
    }

    public function getPageViews($days = 6)
    {
        $data = Analytics::performQuery(Period::days($days), 'ga:pageViews', [
            'dimensions' => 'ga:date',
            'sort' => 'ga:date'
        ]);

        $all = $data->rows;

        $last_week = [];
        $this_week = [];
        $last_total = 0;
        $this_total = 0;
        $last_dates = [];
        $this_dates = [];

        $i = 1;
        foreach ($all as $day) {
            if ($i <= floor((sizeof($all)) / 2)) {
                $last_total += $day[1];
                $last_week[] = $day[1];
                $last_dates[] = $this->formatDate($day[0]);
            } else {
                $this_total += $day[1];
                $this_week[] = $day[1];
                $this_dates[] = $this->formatDate($day[0]);
            }
            $i++;
        }

        return [
            'last_week' => [
                'rows' => $last_week,
                'total' => $last_total,
                'date' => $last_dates
            ],
            'this_week' => [
                'rows' => $this_week,
                'total' => $this_total,
                'date' => $this_dates
            ]
        ];
    }

    public function filterNewUsersByCountry($result)
    {
        $new = [];
        foreach ($result->rows as $res) {
            if ($res[0] === "New Visitor") {
                $new[] = [
                    "country" => $res[1],
                    "value" => $res[2]
                ];
            }
        }
        return $new;
    }

    public function mergeCountryVisitors($countrySession, $countryVisitors)
    {
        $result = [];

        $countryVisitors = $this->filterNewUsersByCountry($countryVisitors);

        foreach ($countrySession->rows as $session) {

            foreach ($countryVisitors as $visitor) {

                if ($visitor['country'] == $session[0]) {
                    $result[] = [
                        "country" => $session[0],
                        "sessions" => $session[1],
                        "new_visitors" => $visitor['value']
                    ];
                }
            }
        }
        return $result;
    }

    public function labelSources($traffics)
    {
        $traff_data = [];
        foreach ($traffics as $traffic) {
            $source_alternative = '';
            if ($traffic[0] == '(none)') $source_alternative = 'direct';
            if ($traffic[0] == 'Chat') $source_alternative = 'social';
            $traff_data[] = [
                'source' => $source_alternative ? $source_alternative : $traffic[0],
                'sessions' => $traffic[1],
                'new_users' => $traffic[2],
                'bounce_rate' => $traffic[3],
                'pages_per_session' => $traffic[4]
            ];
        }

        return $traff_data;
    }

    public function nameCountries($country_data)
    {

        foreach ($country_data as &$country_entry) {
            $country_entry['country_code'] = $this->countryNameToCode($country_entry['country'], FALSE);
        }

        return $country_data;
    }

    public function countryNameToCode($country, $byKey = TRUE)
    {
        $country_db = json_decode(File::get(storage_path('json/countries.json')));

        foreach ($country_db as $code => $name) {
            if ($byKey) {
                if ($code === $country) return $name;
            } else {
                if ($name === $country) {
                    return $code;
                }
            }
        }
    }

    public function formatDate($date): string
    {
        $date = substr($date, 4);
        $month = substr($date, 0, 2);
        $day = substr($date, 2);
        return $month . "/" . $day;
    }
}
