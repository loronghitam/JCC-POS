<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Stock;
use App\Models\Product;
use App\Models\Transaction;
use Termwind\Components\Dd;
use Illuminate\Http\Request;
use LaravelDaily\Invoices\Invoice;
use Illuminate\Support\Facades\Redirect;
use LaravelDaily\Invoices\Classes\Party;
use LaravelDaily\Invoices\Classes\InvoiceItem;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \resource\views\admin\datamaster\index
     */
    public function index()
    {
        $transaksi = Transaction::all()->sortByDesc('id');

        return view('admin.datamaster.index', compact('transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        return view('admin.transaksi.index', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getSerialNumber(): string
    {
        $lastUsedSerialNumber = Order::query()->orderByDesc('order_number')->first();
        // explode by - so you have your tho sequences of the number
        $parts = explode('-', $lastUsedSerialNumber);
        // if second part is 999, increment first part, from AAB to AAC, and set
        // second sequence to 000;
        if ((int) $parts[0] === 999) {
            $parts[0] = $parts[0]++;
            $parts[1] = 000;
        }
        // increment second sequence if lower than 999
        if ((int) $parts[0] < 999) {
            $parts[0] = str_pad(++$parts[0], 3, '0', STR_PAD_LEFT);
        }
        return $parts[0] . '-' . $parts[0];
    }
    public function store(Request $request)
    {
        if (!Order::where('order_number', 'JJC-001')) {
            $string = 'JJC' . '-000';
            $string++;
        } else {
            $string = Order::max('order_number');
            $string++;
        }

        $id = Product::all('id', 'price', 'name');
        $price = 0;
        foreach ($id as $key) {
            $id = $request->input('item' . $key->id);
            $stock = $request->input('stock' . $key->id);
            $price += $stock * $key->price;
            Order::create([
                'order_number' => $string,
                'product_id' => $id,
                'qty' => $stock,
                'amount' => $stock * $key->price,
            ]);
            Stock::find($id)->decrement('stock', (int)$stock);
        }
        $product =  Product::all();
        $total = Order::Where('order_number', $string)->sum('amount');

        return view('admin.transaksi.invoice', compact('product', 'total'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
