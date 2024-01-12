<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;
use Termwind\Components\Raw;

class MenuController extends Controller
{
    public function menu(){
        // dd('Hello Menu');
       $Menu=Menu::with('category')->get();
        return view('frontend.pages.menu.menu', compact('Menu'));
    }

    public function searchmenu(Request $request){

        //dd($request->all());
        if($request->search){
            $Menu=Menu::where('name','LIKE','%'.$request->search.'%')->get();
        }else{
            $Menu=Menu::all();
        };

        return view('frontend.pages.menu.menu',compact('Menu'));
    }


    public function menuundercategory($category_id){

        $category=Menu::where('category_id',$category_id)->get();
        return view('frontend.pages.category.category',compact('category'));
    }
    

    
}