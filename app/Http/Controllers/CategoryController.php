<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{

    public function category(){

        if(Auth::id()){
            $data=category::all();
        return view('admin.category',compact('data'));
        //display products category to page
    }
        else{
            return redirect('login');
        }
    }

    public function add_category(Request $request)
    { //add a new category to dbase
        
            $data=new category;
            $data->name=$request->category;
            $data->parrent=$request->parrent;
            $data->long_description=$request->long_description;
            $data->short_description=$request->short_description;
            $data->sequence=$request->sequence;
            $data->start_date=$request->start_date;
            $data->end_date=$request->end_date;
            $data->createdby=Auth::user()->name;
            $data->lastmodifiedby=Auth::user()->name;
            $data->save();
            return redirect()->back()->with('message','Category Added Succesfully!');
    
        
    }
}
