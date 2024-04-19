<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //

    public function index(){
        $categories = response()->json(Category::all());
        return $categories;
    }

    public function show($id){
        $categories = response()->json(Category::find($id));
        return $categories;
    }

    public function destroy($id){
        Category::find($id)->delete();
    }

    public function store(Request $request){
        $categories = new Category();
        $categories -> id = $request->id;
        $categories -> kategorianev = $request->kategorianev;
        $categories -> save();
    }

    public function update(Request $request, $id){
        $categories = Category::find($id);
        $categories -> id = $request->id;
        $categories -> kategorianev = $request->kategorianev;
        $categories -> save();
    }
}
