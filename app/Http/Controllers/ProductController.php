<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //halaman awal
    public function index()
    {
        // return view('products.index');
    }

    /*
    public function show()
    {
        if(is_numeric($id)) {
            $data = DB::table('products')->where('id', $id)->first();
            $data->price = number_format($data->price);
            return Response::json($data);
        }

        $data = DB::table('products')
            ->join('product_categories', 'product_categories.id', '=', 'products.product_category_id')
            ->select([
                'products.*', 'product_categories.name as product_category'
            ])
            ->orderBy('products.id', 'desc');

        return DataTables::of($data)
            ->editColumn(
                'price',
                function($row) {
                    return number_format($row->price);
                }
            )
            ->addColumn(
                'action',
                function($row) {
                    $data = [
                        'id' => $row->id
                    ];

                    return view('components.buttons.product', $data);
                }
            )
            ->addIndexColumn()
            ->make(true);
    }
    */

    //untuk menampilkan form create product
    public function create(Request $request)
    {
        try {

            $image = $request->file('image');
            DB::transaction(function () use ($request,$image)
            {
                DB::table('products') -> insert([
                    'id' => $request->id,
                    'name' => $request->name,
                    'id_category' => $request ->id_category,
                    'details' => $request->detail,
                    'price' => $request->price,
                    'stok' => $request-> stok,
                    'image' => $image,
                    'created_at' => $request->created_at,
                ]);
            });
        } catch (Exception $e){
            return 'data error';
        }

        // return view('admin.products.create');
        // return view('admin.products.show', compact('id'));
        // });
    }

    /*
    public function store(Request $request)
    {
        $request->validate([]);
    }
    */

    public function update(Request $request, $id)
    {
        DB::transaction(function () use ($request, $id)
        {
            DB::table('products')
                ->where('id', $id)
                ->update([
                    'id' => $request->id,
                    'name' => $request->name,
                    'details' => $request->product_category_id,
                    'price' => str_replace('.','',$request->price),
                    'stok' => $request->stok,
                    'created_at' => date('Y-m-d H:i:s'),
                    // 'price' => $request->price,
                ]);
        });
    }

    public function destroy(Request $request, $id)
    {
        $request->validate([
            'id' =>'required|numeric|exists:products,id',
        ]);
    }
}
