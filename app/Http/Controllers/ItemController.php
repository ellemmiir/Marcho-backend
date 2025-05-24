<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Item, Category, Color, Size};


class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $allCategories = Category::withCount('items')->get();
        $allColors = Color::withCount('items')->get();
        $allSizes = Size::pluck('name', 'id');
        $sizes = $request->input('sizes', []); // Массив размеров
        $colors = $request->input('colors', []);
        $categories = $request->input('categories', []);

        // Цены по факту из базы, с учётом COALESCE
        $realMin = Item::selectRaw('MIN(COALESCE(new_price, old_price)) as min_price')->value('min_price');
        $realMax = Item::selectRaw('MAX(COALESCE(new_price, old_price)) as max_price')->value('max_price');

        $minPrice = $request->input('min_price');
        $maxPrice = $request->input('max_price');

        $items = Item::query()
            ->priceMin($minPrice)
            ->priceMax($maxPrice)
            ->filterSizes($sizes)
            ->filterColors($colors)
            ->filterCategories($categories)
            ->paginate(10)
            ->appends($request->query());

        return view('pages.shop',compact('items', 'minPrice', 'maxPrice',
        'categories', 'colors', 'sizes', 'allSizes', 'realMin', 'realMax', 'allCategories', 'allColors'));
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
