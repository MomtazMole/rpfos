<?php

namespace App\Http\Controllers;



use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{

    public function list()
    {
        // dd('hhhhh');
        $categories = Category::all();
        return view('backend.pages.category.list', compact('categories'));
    }


    public function form()
    {

        return view('backend.pages.category.form');
    }

    public function store(Request $request)
    {
        //dd($request);

        $validate = Validator::make(
            $request->all(),
            [
                'category_name' => 'required',
                'photo' => 'required',
                'category_description' => 'required',
            ]
        );

        if ($validate->fails()) {
            // dd($validate->getMessageBag());
            return redirect()->back();
        }

        $file_name = null;
        if ($request->hasfile('photo')) {
            $file = $request->file('photo');
            $file_name = date('Ymdhis') . '.' . $file->getClientOriginalExtension();
            $file->storeAs('uploads/', $file_name);
        }

        Category::create([
            'category' => $request->category_name,
            'photo' => $file_name,
            'description' => $request->category_description
        ]);

        return redirect()->route('Category.list');
    }

    public function feedbacklist()
    {
        //dd('sjhdjhg');
        return view('backend.pages.feedback.list');
    }


    public function delete($category_id) {
        // dd($category_id);
        $Category=Category::find($category_id)->delete();
        return redirect()->back();
    }

}
