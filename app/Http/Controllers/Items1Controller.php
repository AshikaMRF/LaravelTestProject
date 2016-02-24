<?php

namespace App\Http\Controllers;

use App\Items1;
use App\Http\Requests;
use App\Http\Requests\CreateItemRequest;
use App\Http\Controllers\Controller;

class Items1Controller extends Controller
{
    //

    public  function  index(){
        $items=Items1::all();
        return view('items.index', compact('items'));

    }

    public  function  show($id){
        $item=Items1::findOrNew($id);
        return view('items.show', compact('item'));

    }

    public  function  create(){
        // $items=Item::findOrNew($id);
        return view('items1.create');
        //sareturn "ngg";

    }

    public function store(CreateItemRequest $request){

        //$request->();
        Item::create($request->all());
        return redirect('items');


    }

//    public function edit($id){
//        //dd("edit");
//        $article = Item::findOrFail($id);
//        return view('items.edit',compact('article'));
//    }


//    public function destroy($id)
//    {
//        $article = Article::findOrFail($id);
//        $article->delete();
//
//        return redirect('articles');
//    }

    public function destroy($id){

        $item=Item::findOrNew($id);
        $item->delete();

    }
    public function edit($id){
        $item=Item::findOrNew($id);
        return redirect('items.edit');

    }

}
