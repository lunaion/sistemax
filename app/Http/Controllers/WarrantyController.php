<?php

namespace App\Http\Controllers;

use App\Category;
use App\City;
use App\Mark;
use App\Modelo;
use App\Operation;
use App\Part;
use App\Provider;
use App\Sede;
use App\Type;
use App\Warranty;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WarrantyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:warranties.create')->only(['create','store']);
        $this->middleware('can:warranties.index')->only(['index']);
        $this->middleware('can:warranties.show')->only(['show']);
        $this->middleware('can:change.status.purchases')->only(['change_status']);
        $this->middleware('can:warranties.pdf')->only(['pdf']);
        $this->middleware('can:upload.warranties')->only(['upload']);
    }

    public function index()
    {
        $warranties = Warranty::get();
        return view('admin.warranty.index', compact('warranties'));
    }

    public function create()
    {
        $categories = Category::get();
        $types = Type::get();
        $marks = Mark::get();
        $modelos = Modelo::get();
        $parts = Part::get();
        $cities = City::get();
        $sedes = Sede::where('status', 'ACTIVE')->get();
        $operations = Operation::where('status', 'ACTIVE')->get();
        $providers = Provider::get();

        return view('admin.warranty.create', compact('categories','types','marks','modelos','parts','cities','sedes','operations','providers'));
    }

    public function store(Request $request)
    {

        Warranty::create($request->all()+[
            'user_id'=>Auth::user()->id,
            'warranty_date'=>Carbon::now('America/Bogota'),
        ]);
        
        return redirect()->route('warranties.index');
    }

    public function show(Warranty $warranty)
    {
        return view('admin.warranty.show', compact('warranty'));
    }

    public function edit(Warranty $warranty)
    {
        $categories = Category::get();
        $types = Type::get();
        $marks = Mark::get();
        $modelos = Modelo::get();
        $parts = Part::get();
        $cities = City::get();
        $sedes = Sede::get();
        $operations = Operation::get();
        $providers = Provider::get();
        return view('admin.warranty.edit', compact('warranty'));
    }

    public function update(Request $request, Warranty $warranty)
    {
        /* $purchase->update($request->all());
        return redirect()->route('purchases.index'); */
    }

    public function destroy(Warranty $warranty)
    {
        $warranty->delete();
        return redirect()->route('warranties.index');
    }

    public function pdf(Warranty $warranty)
    {
        /* $pdf = PDF::loadView('admin.purchase.pdf', compact('purchase','subtotal','purchaseDetails'));
        return $pdf->download('Reporte_de_compra_'.$purchase->id.'.pdf'); */
    }

    public function upload(Request $request, Warranty $warranty){

    }

    public function change_status(Warranty $warranty){
        if ($warranty->status == 'VALID') {
            $warranty->update(['status'=>'CANCELED']);
            return redirect()->back();
        } else {
            $warranty->update(['status'=>'VALID']);
            return redirect()->back();
        }
    }
}
