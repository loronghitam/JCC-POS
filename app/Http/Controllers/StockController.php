<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $products = Product::all();
        return view('admin/stocks/index', ['products' => Product::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function show(Stock $stock)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function edit(Stock $stock)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stock $stock)
    {
        // $action      = request()->input('button', 'add') == 'add' ? 'add' : 'remove';
        $action      = $request->button;
        // dd($action);
        $stockAmount = $request->stock;
        $sign        = $action == 'add' ? '+' : '-';
        if ($stockAmount < 1) {
            return redirect()->route('stocks.index')->with([
                'error' => 'No item was added/removed. Amount must be greater than 1.',
            ]);
        }

        if ($action == 'add') {
            $stock->increment('stock', $stockAmount);
            $status = $stockAmount . ' item(-s) was added to stock.';
        }

        if ($action == 'remove') {
            if ($stock->stock - $stockAmount < 0) {
                // dd($action);
                return redirect()->route('stocks.index')->with([
                    'error' => 'Not enough items in stock.',
                ]);
            }
            $stock->decrement('stock', $stockAmount);
            $status = $stockAmount . ' item(-s) was removed from stock.';
        }

        Transaction::create([
            'stock' => $sign . $stockAmount,
            'id_product' => $request->id_product,
        ]);

        return redirect()->route('stocks.index')->with([
            'status' => $status
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stock $stock)
    {
        //
    }
}
