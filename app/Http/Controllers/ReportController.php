<?php

namespace App\Http\Controllers;

use App\Warranty;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:reports.day')->only(['reports_day']);
        $this->middleware('can:reports.date')->only(['reports_date']);
    }

    public function reports_day(){
        $warranties = Warranty::whereDate('warranty_date', Carbon::today('America/Bogota'))->get();
        return view('admin.report.reports_day', compact('warranties'));
    }
    public function reports_date(){
        $warranties = Warranty::whereDate('warranty_date', Carbon::today('America/Bogota'))->get();
        return view('admin.report.reports_date', compact('warranties'));
    }
    public function report_results(Request $request){
        $fechaInicio = $request->fecha_ini.'00:00:00';
        $fechaFinal = $request->fecha_fin.'23:59:59';
        $warranties = Warranty::whereBetween('warranty_date', [$fechaInicio, $fechaFinal])->get();

        /* return redirect()->route('reports.date', compact('warranties')); */
        return view('admin.report.reports_date', compact('warranties'));
    }
}
