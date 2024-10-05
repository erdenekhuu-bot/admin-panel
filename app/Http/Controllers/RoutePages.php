<?php

namespace App\Http\Controllers;

use App\Models\MainProduct;
use App\Models\Advice;
use Illuminate\View\View;
use App\Models\Organization;
use App\Models\Statistic;
use Illuminate\Support\Facades\DB;

class RoutePages extends Controller
{   

    public function test(){
       return response()->json(Statistic::all() ?? null);
    }

    public function test1($id){
        $production=MainProduct::find($id);
        return response()->json($production);
    }

    public function phoenixsheater(): View
    {
        $arr=MainProduct::find(1) ?? null;
        $product=MainProduct::all() ?? null;
        return View('page.PhoenixSheater',['first_item'=>$arr, 'menu'=>$product]);
    }

    public function company(): View
    {
        $organization=Organization::all() ?? null;
        $statistic=Statistic::all() ?? null;
        return View('page.Company',['organization'=>$organization, 'statistic'=>$statistic]);
    }
    
    public function ecological(): View
    {
        return View('page.Ecological');
    }

    public function calculate(): View
    {
        return View('page.Calculate');
    }

    public function advice(): View
    {
        $data=Advice::all() ?? null;
        return View('page.Advice',['advice'=>$data]);
    }

    public function buypage(): View
    {
        return View('page.BuyPage');
    }

    public function bpage($id): View
    {
        $production=MainProduct::find($id);
        if (!$production) {
            abort(404); 
        }
        return View('page.BuyPage', ['production'=>$production]);
    }

    public function shoppingcart(): View
    {
         return View('page.ShoppingCart');
    }

    public function faq(): View
    {
        return View('page.FAQ');
    }
}