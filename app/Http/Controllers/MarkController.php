<?php

namespace App\Http\Controllers;

use App\Mark;
use Illuminate\Http\Request;

class MarkController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:products.create')->only(['create','store']);
        $this->middleware('can:products.index')->only(['index']);
        $this->middleware('can:products.edit')->only(['edit','update']);
        $this->middleware('can:products.show')->only(['show']);
        $this->middleware('can:products.destroy')->only(['destroy']);   
    }

    public function index()
    {
        $marks = Mark::get();
        return view('admin.mark.index', compact('marks'));
    }

    public function create()
    {
        return view('admin.mark.create');
    }

    public function store(Request $request)
    {

        // Guardado de la imagen
        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $image_name = time().'_'.$file->getClientOriginalName();
            $file->move(public_path("/image/mark"),$image_name);
        }

        $mark = Mark::create($request->all()+[
            'image'=>$image_name,
        ]);

        return redirect()->route('marks.index');
    }

    public function show(Mark $mark)
    {
        return view('admin.mark.show', compact('mark'));
    }

    public function edit(Mark $mark)
    {
        return view('admin.mark.edit', compact('mark'));
    }

    public function update(Request $request, Mark $mark)
    {
        // Guardado de la imagen
        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $image_name = time().'_'.$file->getClientOriginalName();
            $file->move(public_path("/image/mark"),$image_name);
        }

        $mark->update($request->all()+[
            'image'=>$image_name,
        ]);
        return redirect()->route('marks.index');
    }

    public function destroy(Mark $mark)
    {
        $mark->delete();
        return redirect()->route('marks.index');
    }
}
