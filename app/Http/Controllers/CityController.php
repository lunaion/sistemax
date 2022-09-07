<?php

namespace App\Http\Controllers;

use App\City;
use App\Exports\CitiesExport;
use App\Http\Requests\Category\StoreRequest;
use App\Http\Requests\Category\UpdateRequest;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:cities.create')->only(['create','store']);
        $this->middleware('can:cities.index')->only(['index']);
        $this->middleware('can:cities.edit')->only(['edit','update']);
        $this->middleware('can:cities.show')->only(['show']);
        $this->middleware('can:cities.destroy')->only(['destroy']);
    }

    public function index()
    {
        $cities = City::get();
        return view('admin.city.index', compact('cities'));
    }

    public function create()
    {
        return view('admin.city.create');
    }

    public function store(StoreRequest $request)
    {
        City::create($request->all());
        return redirect()->route('cities.index');
    }

    public function show(City $city)
    {
        return view('admin.city.show', compact('city'));
    }

    public function edit(City $city)
    {
        return view('admin.city.edit', compact('city'));
    }

    public function update(UpdateRequest $request, City $city)
    {
        $city->update($request->all());
        return redirect()->route('cities.index');
    }

    public function destroy(City $city)
    {
        $city->delete();
        return redirect()->route('cities.index');
    }

    public function exportsExcel() 
    {
        return Excel::download(new CitiesExport, 'Lista-Ciudades.xlsx');
    }
}
