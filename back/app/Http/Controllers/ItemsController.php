<?php

namespace App\Http\Controllers;

use App\items;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    public function postItem(Request $request){
        $item =new items();
        $item->name=$request->input('name');
        $item->qty=$request->input('qty');
        $item->price=$request->input('price');
        $item->save();
        return response()->json(['message'=>$item],201);
    }

    public  function getItem(){
        $allItems= items::all();
        return response()->json([$allItems],200);
    }

    public  function deleteItem($id){
        $item=items::find($id);
        if(!$item){
            return response()->json(['msg'=>"item not found"],404);

        }
        $item->delete();
        return response()->json(['msg'=>"deleted"],201);
    }
    public  function editItem(Request $request,$id){
        $item= items::find($id);
        if(!$item){
            return response()->json(['msg'=>"item not found"],404);

        }
        $item->name=$request->input('name');
        $item->qty=$request->input('qty');
        $item->price=$request->input('price');
        $item->save();
        return response()->json(['msg'=>"updated"],201);
    }
}
