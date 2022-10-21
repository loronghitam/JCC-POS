<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //halaman awal
    public function index()
    {
        // return view('products.index');
    }


    public function edit($id)
    {

        // dd($id);

        $data = Product::find($id)->first();

        $category =Category::find($data->id_category)->first();

        // dd($data->name);

        return view('admin.products.edit', compact('data', 'id', 'category'));

/*
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
            */
    }

    //untuk menampilkan form create product
    public function create(Request $request)
    {
        try {

            $image = $request->file('image');
            DB::transaction(function () use ($request,$image)
            {
                DB::table('products') -> insert([
                    'name' => $request->name,
                    'id_category' => $request ->id_category,
                    'detail' => $request->detail,
                    'price' => $request->price,
                    'stok' => $request-> stok,
                    'image' => $image,
                    'created_at' => $request->created_at,
                ]);
            });
        } catch (Exception $e){
            dd($e);
            return 'kontol jaran';
        }

    }

    // return view('admin.products.create');
    // return view('admin.products.show', compact('id'));
    // });
    /*
    public function store(Request $request)
    {
        $request->validate([]);
    }
    */

public function update(Request $request, $id)
    {

    try{
        // $image = $request->file('image');
        DB::transaction(function () use ($request, $id)
        {
            DB::table('products')
            ->where('id', $id)
            ->update([
                'id' => $request->id,
                'name' => $request->name,
                'detail' => $request->detail,
                'price' => str_replace('.','',$request->price),
                'stok' => $request->stok,
                'image' => '$image',
                'created_at' => date('Y-m-d H:i:s'),
                // 'price' => $request->price,
            ]);
        });
    } catch(Exception $e) {
        dd($e);
        return 'kontol jaran';
    }
}

    public function destroy(Request $request, $id)
    {
        try {
            DB::transaction(function () use ($id) {
                DB::table('products')
                    ->where('id', $id)
                    ->delete();
            });
        }  catch (Exception $e){
            return 'kontol jaran';
        }
        // $request->validate([
        //     'id' =>'required|numeric|exists:products,id',
        // ]);
    }
}
