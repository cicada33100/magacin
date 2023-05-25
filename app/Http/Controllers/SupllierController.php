<?php

namespace App\Http\Controllers;

use App\Models\Supllier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class SupllierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suppliers=Supllier::all();
        return view('suppliers.indexx',compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $supplier=new Supllier();
        return view('suppliers.create',compact('supplier'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $supplier=Supllier::create($request->all());
        return redirect()->route('suppliers.index')->with('message','Succesfuly created new Supplier');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $supplier=Supllier::findOrFail($id);
        return view('suppliers.show',compact('supplier'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $supplier=Supllier::findOrFail($id);
        return view('suppliers.edit',compact('supplier'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $supplier=Supllier::findOrFail($id);
        $supplier=update($request->all());
        return redirect()->route('suppliers.index')->with('message','Supplier updated succefully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $supplier=Supllier::findOrFail($id);
        $supplier->delete();
        return redirect()->route('suppliers.index')->with('message','Supplier deleted succefully');

    }
}
