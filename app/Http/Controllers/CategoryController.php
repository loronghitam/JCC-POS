<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all()->sortByDesc('id');
        // $count = DB::table('products')->where('id_category');
        return view('admin.categories.index', compact('category'));
    }

    public function destroy(Request $request, $id)
    {
        try {
            DB::transaction(function () use ($id) {
                Category::find($id)->delete();
            });
        } catch (Exception $e) {
            return 'kontol jaran';
        }
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        try {
            DB::transaction(function () use ($request) {
                Category::create($request->All());
            });

            //return view('admin.categories.index');
            return redirect()->to('/category');
        } catch (Exception $e) {
            // dd($e);
            return 'kontol jaran';
        }
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        try {
            DB::transaction(function () use ($request, $id) {
                Category::find($id)->update($request->All());
            });
        } catch (Exception $e) {
            return 'kontol jaran';
        }
        // dd($e);
    }

    public function show($id)
    {
        $category = Category::find($id);
        return view('admin.categories.show', compact('category'));
    }
}
