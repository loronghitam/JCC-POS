<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use App\Models\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    public function show($id)
    {
        $products = Product::find($id)->first();
        return view('admin.categories.show', compact('products'));
    }

    public function create()
    {
        // $category = Category::all();
        $category = DB::table('categories')->get();
        return view('admin.products.create', compact('category'));
    }


    public function edit($id)
    {
        $data = Product::find($id)->first();
        $category = Category::find($data->id_category)->first();
        return view('admin.products.edit', compact('data', 'id', 'category'));
    }

    //untuk menampilkan form create product
    public function store(Request $request)
    {
        // dd($request->all());
        try {
            $image = $request->file('image');
            DB::transaction(function () use ($request) {
                $product = Product::create(
                    $request->all(), // Sort cut untuk memasukan data dengan syarat name pada intputan sama dengan name yang ada di database
                );
                $product->stock()->create(
                    $request->all(),
                );
            });

            return redirect()->to('/product')->with('message', 'Data berhasil di tambah');
        } catch (Exception $e) {
            dd($e);
            return 'kontol jaran';
        }
    }

    public function update(Request $request, $id)
    {

        try {
            // $image = $request->file('image');
            DB::transaction(function () use ($request, $id) {
                DB::table('products')
                    ->where('id', $id)
                    ->update([
                        'id' => $request->id,
                        'name' => $request->name,
                        'detail' => $request->detail,
                        'price' => str_replace('.', '', $request->price),
                        'stok' => $request->stok,
                        'image' => '$image',
                        'created_at' => date('Y-m-d H:i:s'),
                        // 'price' => $request->price,
                    ]);
            });
        } catch (Exception $e) {
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
        } catch (Exception $e) {
            return 'kontol jaran';
        }
        // $request->validate([
        //     'id' =>'required|numeric|exists:products,id',
        // ]);
    }
}
