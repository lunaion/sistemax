<?php

namespace App\Http\Controllers;

use App\Part;
use Illuminate\Http\Request;

class PartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:parts.create')->only(['create','store']);
        $this->middleware('can:parts.index')->only(['index']);
        $this->middleware('can:parts.edit')->only(['edit','update']);
        $this->middleware('can:parts.show')->only(['show']);
        $this->middleware('can:parts.destroy')->only(['destroy']);
    }

    public function index()
    {
        $parts = Part::get();
        return view('admin.part.index', compact('parts'));
    }

    public function create()
    {
        return view('admin.part.create');
    }

    public function store(Request $request)
    {
        Part::create($request->all());
        return redirect()->route('parts.index');
    }

    public function show(Part $part)
    {
        return view('admin.part.show', compact('part'));
    }

    public function edit(Part $part)
    {
        return view('admin.part.edit', compact('part'));
    }

    public function update(Request $request, Part $part)
    {
        $part->update($request->all());
        return redirect()->route('parts.index');
    }

    public function destroy(Part $part)
    {
        $part->delete();
        return redirect()->route('parts.index');
    }
}
