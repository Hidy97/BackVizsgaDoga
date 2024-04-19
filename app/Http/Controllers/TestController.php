<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //

    public function index(){
        $tests = response()->json(Test::all());
        return $tests;
    }

    public function show($id){
        $tests = response()->json(Test::find($id));
        return $tests;
    }

    public function destroy($id){
        Test::find($id)->delete();
    }

    public function store(Request $request){
        $tests = new Test();
        $tests -> id = $request->id;
        $tests -> kerdes = $request->kerdes;
        $tests -> v1 = $request->v1;
        $tests -> v2 = $request->v2;
        $tests -> v3 = $request->v3;
        $tests -> v4 = $request->v4;
        $tests -> helyes = $request->helyes;
        $tests -> kategoriaId = $request->kategoriaId;
        $tests -> save();
    }

    public function update(Request $request, $id){
        $tests = Test::find($id);
        $tests -> id = $request->id;
        $tests -> kerdes = $request->kerdes;
        $tests -> v1 = $request->v1;
        $tests -> v2 = $request->v2;
        $tests -> v3 = $request->v3;
        $tests -> v4 = $request->v4;
        $tests -> helyes = $request->helyes;
        $tests -> kategoriaId = $request->kategoriaId;
        $tests -> save();
    }
}
