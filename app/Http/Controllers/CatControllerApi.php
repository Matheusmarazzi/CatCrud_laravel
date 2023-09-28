<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cat;
use App\Http\Resources\Cats as CatsResource;

class CatControllerApi extends Controller
{
    public function index(){
        
        return CatsResource::collection(Cat::all());
    }
    public function store(Request $request){
       try{//tentanto cadastrar o novo item
        $response = Cat::create($request->all());
        return response()->json($response, 201);//devolve o dado criado com os status 201 que significa ok

       }catch(\Exeption $ex){//caso dê erro 
        return response()->json(null, 400);
       }
    }
    public function update(Request $request, Cat $Cat){
        try{//tentanto cadastrar o novo item
         $Cat->update($request->all());
         return response()->json($Cat, 200);//devolve o dado criado com os status 200 que significa ok
 
        }catch(\Exeption $ex){//caso dê erro 
         return response()->json(null, 400);//devolve nada e erro 400
        }
     }
     public function destroy(Cat $Cat){
        try{//tentanto cadastrar o novo item
         $Cat->delete();
         return response()->json(null, 204);//devolve nada com os status 204 que significa ok
 
        }catch(\Exeption $ex){//caso dê erro 
         return response()->json(null, 400);//devolve nada e erro 400
        }
     }

}
