<?php

namespace App\Http\Controllers;

use App\Models\ProductFilter;
use Illuminate\Http\Request;

class ProductFilterController extends Controller
{
    public function all_products()
    {
        $all_products = ProductFilter::all();
        return view('pricerangefilter',compact('all_products'));
    }
//use
    public function search_products(Request $request)
    {
        $all_products = ProductFilter::whereBetween('price',[$request->left_value, $request->right_value])->get();
        return view('pricerangefilter',compact('all_products'))->render();
    }
//use
    public function sort_by(Request $request)
    {
        if($request->sort_by == 'lowest_price'){
            $all_products = ProductFilter::orderBy('price','asc')->get();
            
        }
        if($request->sort_by == 'highest_price'){
            $all_products = ProductFilter::orderBy('price','desc')->get();
        }
        return view('pricerangefilter',compact('all_products'))->render();

    }

}