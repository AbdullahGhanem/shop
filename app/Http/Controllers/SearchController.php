<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Product;


class SearchController extends Controller
{
    public function postSearch(Request $request) 
    {
        $search = $request->input('search');

        if (empty($search)) {
            return redirect()->back();
        }
        return redirect('search/'.$search);
    }

    public function searchAll($search)
    {

        $products = Product::search($search)->get();

        return view('search.master', compact('search', 'products'));
    }
}
