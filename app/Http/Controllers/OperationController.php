<?php

namespace App\Http\Controllers;

use App\City;
use App\Operation;
use App\Sede;
use Illuminate\Http\Request;

class OperationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:operations.create')->only(['create','store']);
        $this->middleware('can:operations.index')->only(['index']);
        $this->middleware('can:operations.edit')->only(['edit','update']);
        $this->middleware('can:operations.show')->only(['show']);
        $this->middleware('can:operations.destroy')->only(['destroy']);  
        $this->middleware('can:change.change_status')->only(['change_status']);  
    }

    public function index()
    {
        $operations = Operation::get();
        return view('admin.operation.index', compact('operations'));
    }

    public function create()
    {
        $cities = City::get();
        $sedes = Sede::get();
        return view('admin.operation.create', compact('cities','sedes'));
    }

    public function store(Request $request)
    {
        Operation::create($request->all());
        return redirect()->route('operations.index');
    }

    public function show(Operation $operation)
    {
        return view('admin.operation.show', compact('operation'));
    }

    public function edit(Operation $operation)
    {
        $cities = City::get();
        $sedes = Sede::get();
        return view('admin.operation.edit', compact('operation','cities','sedes'));
    }

    public function update(Request $request, Operation $operation)
    {
        $operation->update($request->all());
        return redirect()->route('operations.index');
    }

    public function destroy(Operation $operation)
    {
        $operation->delete();
        return redirect()->route('operations.index');
    }

    public function change_status(Operation $operation){
        if ($operation->status == 'ACTIVE') {
            $operation->update(['status'=>'DESACTIVATED']);
            return redirect()->back();
        } else {
            $operation->update(['status'=>'ACTIVE']);
            return redirect()->back();
        }
        
    }
}
