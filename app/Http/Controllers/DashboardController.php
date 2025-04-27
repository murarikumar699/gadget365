<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;


class DashboardController extends Controller
{
    public static $mobile = ["Apple","Samsung","Xiaomi","realme","OnePlus","Moto","Nokia"];
    public static $laptop = ["HP","Lenovo","Acer","ASUS","Dell","Apple"];
    public static $ac = ["Haier","Voltas","Daikin","Godrej","Lloyd","LG","Whirlpool","Blue Star","Panasonic","Hitachi","Samsung"];
    public static $washingmaching = ["Godrej","Samsung","LG","Whirlpool","Voltas","Haier"];

   public function socialLogin(Request $request){
       try{
        $url = 'http://localhost:3000/api/smartphones/getEveryProduct';
        $response = Http::get($url);
        $products = $response->json();
        return view("dashboard",compact('products'));
       }catch(\Exception $ex){

       }
         
   }

   public function getProductByCategory(Request $request){
       try{
        $url = 'http://localhost:3000/api/smartphones?';
        if($request->has('brands')){
            $url = $url."&brands=".$request->input('brands');
        }

        if($request->has('category')){
            $url = $url."&category=".$request->input('category');
        }
        $response = Http::get($url);
        $products = $response->json();
        $category = self::$mobile;
        if(strtolower($request->input('category')) == "mobile"){
            $category = self::$mobile;
        }elseif(strtolower($request->input('category')) == "laptop"){
            $category = self::$laptop;
        }elseif(strtolower($request->input('category')) == "ac"){
            $category = self::$ac;
        }elseif(strtolower($request->input('category')) == "washingmachine"){
            $category = self::$washingmaching;
        }
        // dd($products[10]);
        return view("pages.category",compact('products','category'));
       }catch(\Exception $ex){
        dd($ex->getMessage());
       }
         
   }

   public function category(Request $request){
       try{
        return view("pages.category");
       }catch(\Exception $ex){

       }
         
   }

   public function detail(Request $request){
       try{
        $id = str_replace('+', ' ', $request->input('product'));
        $url = 'http://localhost:3000/api/smartphones/getProductDetails/?name='.$id.'&productId='.$request->input('productId');
        $response = Http::get($url);
        $products = $response->json() ??  ["smartphone" => [],"similarSmartphones" => []];
        
        return view("pages.details",compact('products'));
       }catch(\Exception $ex){

       }
         
   }

}
