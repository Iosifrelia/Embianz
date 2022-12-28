<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use DataTables;

class CategoryController extends Controller
{

    public function category(Request $request){

       
            if($request->ajax()) {
                $data = Category::select('id','name','parrent','short_description')->get();
                return DataTables::of($data)->addIndexColumn()
                    ->addColumn('action', function($data){
                        $button = '<button type="button" name="edit" id=".$data->id">Edit</button>';
                        $button .= '<button type="button" name="delete" id=".$data->id">Delete</button>';
                        return $button;
                    })
                    ->make(true);
            }
            return view('admin.category');
    
    
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
