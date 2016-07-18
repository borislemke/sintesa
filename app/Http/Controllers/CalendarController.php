<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Requests;

class CalendarController extends Controller
{
    protected $month_names = ['January', 'February', 'March', 'April', 'May', 'June',
        'July', 'August', 'September', 'October', 'November', 'December'];

    public function index()
    {
        $today = Carbon::now();

        $monthsForward = 12;

        $months = [];

        for ($month = 0; $month < $monthsForward; $month++) {

            $updatedMonth = $today->month + $month;

            $year = $today->year;

            if ($updatedMonth > 12) {
                $updatedMonth = $updatedMonth - 12;
                $year++;
            }

            $months["$year-$updatedMonth"] = [
                'year' => $year,
                'month' => $updatedMonth,
                'month_name' => $this->month_names[(Carbon::create($year, $updatedMonth, 1)->month) - 1],
                'days' => $this->getDaysInMonth($updatedMonth, $year)
            ];
        }

        dd($months);
    }

    public function getDaysInMonth($month, $year)
    {
        $monthData = Carbon::create($year, $month, 1);

        $daysThisMonth = $monthData->daysInMonth;

        $days = [];

        for ($day = 1; $day <= $daysThisMonth; $day++) {
            $days[$day] = Carbon::create($year, $month, $day)->format('l');
        }

        return $days;
    }
}
