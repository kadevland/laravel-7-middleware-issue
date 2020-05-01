<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimpleController extends Controller
{


    public function index(Request $request)
    {
        // return the custom header witch add by middleware
        return \response()->json(['costum-header' => $request->headers->get('costum-header')]);
    }
}
