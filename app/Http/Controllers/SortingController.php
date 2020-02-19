<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SortingController extends Controller
{
    public function index(Request $request){
        $cutInt = array_map('floatval',explode(',', $request->x));
        $noIdentic = array_unique($cutInt);
        $oldArray = $request->x;
        $sortArray = rsort ($noIdentic);
        return view('task1', compact('noIdentic', 'oldArray'));
    }

    public function show(){
     return view("show"); 
    }
}
