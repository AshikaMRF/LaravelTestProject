<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Catogory;
use App\Http\Requests;
use Illuminate\Http\Request;// my put
use App\Http\Controllers\Controller;
use App\http\Requests\CreateArticleRequest;
use Carbon\Carbon;

class CatogoriesController extends Controller
{
    public  function  index(){
        $items=Catogory::all();
        return view('catogories.index', compact('items'));

    }

    public  function  show($id){
        $item=Catogory::findOrNew($id);
        return view('items.show', compact('item'));

    }

    public  function  create(){
        // $items=Item::findOrNew($id);
        return view('catogories.create');


    }

    public function store(Requests\CatogoryRequest $request){

        //$request->();
        Catogory::create($request->all());
        return redirect('catogories');


    }



    public function destroy($id)
    {
        $article = Catogory::findOrNew($id);
        $article->destroy($id);

        return redirect('catogories');
    }

//    public function destroy($id){
//
//        $item=Item::findOrNew($id);
//        $item->delete();
//
//    }
//    public function edit($id){
//        $item=Item::findOrNew($id);
//        return redirect('items.edit');
//
//    }

    //
}
