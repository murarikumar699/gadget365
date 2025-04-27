<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

   public function getProduct(Request $request){
       try{
        
        // Product::create([
        //     'name' => 'MongoDB Item',
        //     'price' => 99.99
        // ]);
        
        $products = Product::all();
        dd("products");
        return response()->json([
            'success' => true,
            'message' => 'Data fetched successfully',
            'data' => $products
        ]);
       }catch(\Exception $ex){
        dd($ex);
       }
         
   }

}
