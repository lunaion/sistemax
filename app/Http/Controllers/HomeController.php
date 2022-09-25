<?php

namespace App\Http\Controllers;

use App\Warranty;
use Illuminate\Http\Request;
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
        $garantiasmes = Warranty::where('status', 'VALID')->select(
            DB::raw("DATE_FORMAT(warranty_date,'%M %Y') as mes")
        )->groupBy('mes')->take(12)->get();
        
        $garantiadia = Warranty::where('status', 'VALID')->select(
            DB::raw("DATE_FORMAT(warranty_date,'%D %M %Y') as date")
        )->groupBy('date')->take(30)->get();

        return view('home', compact('garantiasmes', 'garantiadia'));
    }
}
