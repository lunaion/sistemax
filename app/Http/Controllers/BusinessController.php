<?php

namespace App\Http\Controllers;

use App\Business;
use App\Http\Requests\Business\UpdateRequest;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:business.index')->only(['index']);
        $this->middleware('can:business.edit')->only(['update']);
    }

    public function index(){
        $business = Business::where('id',1)->firstOrFail();
        return view('admin.business.index', compact('business'));
    }

    public function update(UpdateRequest $request, Business $business){

        $business->update($request->all());
        return redirect()->route('business.index');

    }
}
