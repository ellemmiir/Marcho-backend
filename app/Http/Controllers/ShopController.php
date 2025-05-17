<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Item::latest()->get();
        // Цены по факту из базы, с учётом COALESCE
        $realMin = Item::selectRaw('MIN(COALESCE(new_price, old_price)) as min_price')->value('min_price');
        $realMax = Item::selectRaw('MAX(COALESCE(new_price, old_price)) as max_price')->value('max_price');
        return view('pages.shop', compact('items', 'realMin', 'realMax'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
