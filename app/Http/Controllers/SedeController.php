<?php

namespace App\Http\Controllers;

use App\City;
use App\Sede;
use App\User;
use Illuminate\Http\Request;

class SedeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:sedes.create')->only(['create','store']);
        $this->middleware('can:sedes.index')->only(['index']);
        $this->middleware('can:sedes.edit')->only(['edit','update']);
        $this->middleware('can:sedes.show')->only(['show']);
        $this->middleware('can:sedes.destroy')->only(['destroy']);  
        $this->middleware('can:change.change_status')->only(['change_status']);  
    }

    public function index()
    {
        $sedes = Sede::get();
        return view('admin.sede.index', compact('sedes'));
    }

    public function create()
    {
        $cities = City::get();
        $users = User::get();
        return view('admin.sede.create', compact('cities','users'));
    }

    public function store(Request $request)
    {

        // Guardado de la imagen
        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $image_name = time().'_'.$file->getClientOriginalName();
            $file->move(public_path("/image/sede"),$image_name);
        }

        $sede = Sede::create($request->all()+[
            'image'=>$image_name,
        ]);

        return redirect()->route('sedes.index');
    }

    public function show(Sede $sede)
    {
        return view('admin.sede.show', compact('sede'));
    }

    public function edit(Sede $sede)
    {
        $cities = City::get();
        $users = User::get();
        return view('admin.sede.edit', compact('sede','cities','users'));
    }

    public function update(Request $request, Sede $sede)
    {
        // Guardado de la imagen
        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $image_name = time().'_'.$file->getClientOriginalName();
            $file->move(public_path("/image/sede"),$image_name);
        }

        $sede->update($request->all()+[
            'image'=>$image_name,
        ]);
        return redirect()->route('sedes.index');
    }

    public function destroy(Sede $sede)
    {
        $sede->delete();
        return redirect()->route('sedes.index');
    }

    public function change_status(Sede $sede){
        if ($sede->status == 'ACTIVE') {
            $sede->update(['status'=>'DESACTIVATED']);
            return redirect()->back();
        } else {
            $sede->update(['status'=>'ACTIVE']);
            return redirect()->back();
        }
        
    }
}
