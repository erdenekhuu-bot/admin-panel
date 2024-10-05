<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hamtrah;
use App\Models\Sanal;

class CustomerReact extends Controller
{
    public function hamtrah(Request $request){
         if($request->isMethod('post')){
            try{
                Hamtrah::create([
                    'Нэр'=>$request->name,
                    'Утасны_дугаар'=>$request->phone,
                    'Хатрах_хүсэлт'=>$request->post
                ]);
            } catch(\Exception $e) {
                return response()->json(['status'=>$e->getMessage()]);
            }
        }
        return response()->json(['status'=>'success'],201);
    }

    public function sanal(Request $request){
        if($request->isMethod('post')){
            try{
                Sanal::create([
                    'Нэр'=>$request->name,
                    'Утасны_дугаар'=>$request->phone,
                    'Санал_хүсэлт'=>$request->post
                ]);
            } catch(\Exception $e) {
                return response()->json(['status'=>$e->getMessage()]);
            }
        }
        return response()->json(['status'=>'success'],201);
    }
}