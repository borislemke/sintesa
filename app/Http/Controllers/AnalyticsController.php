<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Spatie\LaravelAnalytics\LaravelAnalytics;

class AnalyticsController extends Controller
{
    //
    public function test()
    {
        $analyticsData = LaravelAnalytics::getVisitorsAndPageViews(7);

        var_dump($analyticsData);
    }
}
