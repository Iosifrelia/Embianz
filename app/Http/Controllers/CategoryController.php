<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use DataTables;
use Validator;

class CategoryController extends Controller
{

    public function category(Request $request){
       
            if($request->ajax()) {
                $data= Category::query();
                return DataTables::eloquent($data)
                    ->addColumn('action', function($data){
                        $button = '<button type="button" class="view btn-bg br-xs"  name="wiew" id="'.$data->id.'">Edit</button>';
                        $button .= '<button type="button" class="delete ml-1 btn-secondary text-bg br-xs"  name="delete" id="'.$data->id.'">Delete</button>';
                        return $button;
                    })
                    ->make(true);
            }
            return view('admin.category');
    }

    public function add_category(Request $request)
    {       //add a new category to dbase
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

    public function edit($id){
        //edit category
        if(request()->ajax()){
        $data = Category::findOrFail($id);
        return response()->json(['result' =>$data]);
        }
    }

    public function delete(Request $request){
        $category=category::find($request->hiddenid);
        $category->delete();
        return redirect()->back()->with('message','Category Deleted Succesfully!');
    }

    public function update_category(Request $request){
        
        $data= Category::find($request->hidden_id);
        $data->name=$request->categoryname;
        $data->parrent=$request->category_parrent;
        $data->long_description=$request->category_long_description;
        $data->short_description=$request->category_short_description;
        $data->sequence=$request->category_sequence;
        $data->start_date=$request->category_start_date;
        $data->end_date=$request->category_end_date;
        $data->lastmodifiedby=Auth::user()->name;
        $data->save();
        return redirect()->back()->with('message','Category Update Succesfully!');
        
    }
}
