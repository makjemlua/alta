<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Number;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $numberAll = Number::count();
        $numberUsed = Number::where('num_status', 2)->count();
        $numberWaiting = Number::where('num_status', 1)->count();
        $numberMissed = Number::where('num_status', 3)->count();

        $dates = collect();
        $month = date('m');
        $year = date('Y');

        for ($i = 1; $i <= 30; $i++) {
            $time = mktime(12, 0, 0, $month, $i, $year);
            if (date('m', $time) == $month) {
                $date = Carbon::now()
                    ->subMonth()
                    ->endOfMonth()
                    ->addDays($i)
                    ->format('Y-m-d');
                $dates->put($date, 0);
            }
        }

        $posts = Number::where('created_at', '>=', $dates->keys()->first())
            ->groupBy('date')
            ->orderBy('date')
            ->get([DB::raw('DATE( created_at ) as date'), DB::raw('COUNT( * ) as "count"')])
            ->pluck('count', 'date');

        $dates = $dates->merge($posts);

        $viewData = [
            'numberAll' => $numberAll,
            'numberUsed' => $numberUsed,
            'numberWaiting' => $numberWaiting,
            'numberMissed' => $numberMissed,
            'month' => $month,
            'year' => $year,
            'dates' => json_encode($dates),
        ];
        return view('dashboard.index', $viewData);
    }
    public function chartDay()
    {
        $dates = collect();
        $month = date('m');
        $year = date('Y');

        for ($i = 1; $i <= 30; $i++) {
            $time = mktime(12, 0, 0, $month, $i, $year);
            if (date('m', $time) == $month) {
                $date = Carbon::now()
                    ->subMonth()
                    ->endOfMonth()
                    ->addDays($i)
                    ->format('Y-m-d');
                $dates->put($date, 0);
            }
        }

        $posts = Number::where('created_at', '>=', $dates->keys()->first())
            ->groupBy('date')
            ->orderBy('date')
            ->get([DB::raw('DATE( created_at ) as date'), DB::raw('COUNT( * ) as "count"')])
            ->pluck('count', 'date');

        $dates = $dates->merge($posts);

        $viewData = [
            'dates' => json_encode($dates),
            'month' => $month,
            'year' => $year,
        ];
        return view('dashboard.dayChart', $viewData);
    }
    public function chartWeek()
    {
        $month = date('m');
        $year = date('Y');
        for ($i = 0; $i < 4; $i++) {
            $data[] = Number::whereBetween('created_at', [
                Carbon::now()
                    ->subWeek($i + 1)
                    ->format('Y-m-d'),
                Carbon::now()
                    ->subWeek($i)
                    ->format('Y-m-d'),
            ])
                ->get()
                ->count();
        }
        $viewData = [
            'dates' => json_encode($data),
            'month' => $month,
            'year' => $year,
        ];
        return view('dashboard.weekChart', $viewData);
    }
    public function chartMonth()
    {
        $month = date('m');
        $year = date('Y');
        $dataMonth = Number::select('id', 'created_at')
            ->get()
            ->groupBy(function ($date) {
                return Carbon::parse($date->created_at)->format('m');
            });
        $usermcount = [];
        $datas = [];

        foreach ($dataMonth as $key => $value) {
            $usermcount[(int) $key] = count($value);
        }

        //$month = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'];

        for ($i = 1; $i <= 12; $i++) {
            if (!empty($usermcount[$i])) {
                $datas[$i] = $usermcount[$i];
            } else {
                $datas[$i] = 0;
            }
            //$datas[$i]['month'] = $month[$i - 1];
        }

        $viewData = [
            'dates' => json_encode($datas),
            'month' => $month,
            'year' => $year,
        ];
        return view('dashboard.monthChart', $viewData);
    }
}
