<?php

namespace App\Http\Controllers;

use App\Mark;
use App\Modelo;
use Illuminate\Http\Request;

class ModeloController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:modelos.create')->only(['create','store']);
        $this->middleware('can:modelos.index')->only(['index']);
        $this->middleware('can:modelos.edit')->only(['edit','update']);
        $this->middleware('can:modelos.show')->only(['show']);
        $this->middleware('can:modelos.destroy')->only(['destroy']);  
    }

    public function index()
    {
        $modelos = Modelo::get();
        return view('admin.modelo.index', compact('modelos'));
    }

    public function create()
    {
        $marks = Mark::get();
        return view('admin.modelo.create', compact('marks'));
    }

    public function store(Request $request)
    {
        Modelo::create($request->all());
        return redirect()->route('modelos.index');
    }

    public function show(Modelo $modelo)
    {
        return view('admin.modelo.show', compact('modelo'));
    }

    public function edit(Modelo $modelo)
    {
        $marks = Mark::get();
        return view('admin.modelo.edit', compact('modelo','marks'));
    }

    public function update(Request $request, Modelo $modelo)
    {
        $modelo->update($request->all());
        return redirect()->route('modelos.index');
    }

    public function destroy(Modelo $modelo)
    {
        $modelo->delete();
        return redirect()->route('modelos.index');
    }

}
