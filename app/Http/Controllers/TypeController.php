<?php

namespace App\Http\Controllers;

use App\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:types.create')->only(['create','store']);
        $this->middleware('can:types.index')->only(['index']);
        $this->middleware('can:types.edit')->only(['edit','update']);
        $this->middleware('can:types.show')->only(['show']);
        $this->middleware('can:types.destroy')->only(['destroy']);
    }

    public function index()
    {
        $types = Type::get();
        return view('admin.type.index', compact('types'));
    }

    public function create()
    {
        return view('admin.type.create');
    }

    public function store(Request $request)
    {
        Type::create($request->all());
        return redirect()->route('types.index');
    }

    public function show(Type $type)
    {
        return view('admin.type.show', compact('type'));
    }

    public function edit(Type $type)
    {
        return view('admin.type.edit', compact('type'));
    }

    public function update(Request $request, Type $type)
    {
        $type->update($request->all());
        return redirect()->route('types.index');
    }

    public function destroy(Type $type)
    {
        $type->delete();
        return redirect()->route('types.index');
    }
}
