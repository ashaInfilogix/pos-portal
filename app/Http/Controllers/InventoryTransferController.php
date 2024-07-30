<?php

namespace App\Http\Controllers;

use App\Models\InventoryTransfer;
use App\Models\Store;
use Illuminate\Http\Request;

class InventoryTransferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.inventory-transfer.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $stores = Store::latest()->get();
        return view('admin.inventory-transfer.create', compact('stores'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        print_r($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(InventoryTransfer $inventoryTransfer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InventoryTransfer $inventoryTransfer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, InventoryTransfer $inventoryTransfer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InventoryTransfer $inventoryTransfer)
    {
        //
    }
}
