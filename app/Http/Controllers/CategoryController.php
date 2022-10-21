<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function destroy(Request $request, $id)
        {
            try {
                DB::transaction(function () use ($id) {
                    DB::table('categories')
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

        public function create(Request $request)
    {
        try {
            DB::transaction(function () use ($request)
            {
                DB::table('categories') -> insert([
                    'name' => $request->name,
                    // 'created_at' => $request->created_at,
                ]);
            });
        } catch (Exception $e){
            // dd($e);
            return 'kontol jaran';
        }

    }
}
