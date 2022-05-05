<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Number;

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

        
        //dd($numberUsed);
        $viewData = [
            'numberAll' => $numberAll,
            'numberUsed' => $numberUsed,
            'numberWaiting' => $numberWaiting,
            'numberMissed' => $numberMissed
        ];
        return view('dashboard.index', $viewData);
    }
}
