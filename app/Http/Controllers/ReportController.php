<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;
use App\Exports\ReportExport;
use Maatwebsite\Excel\Facades\Excel;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reports = Report::whereRaw(1);
        $reports = $reports->paginate(10);
        $viewData = [
            'reports' => $reports,
        ];
        return view('report.index', $viewData);
    }

    public function table()
    {
        $reports = Report::all();
        $viewData = [
            'reports' => $reports,
        ];
        return view('report.table', $viewData);
    }

    public function export()
    {
        return Excel::download(new ReportExport(), 'report.xlsx');
    }
}
