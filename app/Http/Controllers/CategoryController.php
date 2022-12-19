<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\SpladeTable;

class CategoryController extends Controller
{
    public function __invoke(Request $request)
    {   
        $categorys = Category::get();

        return view('admin.categoryview', [
            'categorys' => SpladeTable::for(Category::class)
            ->column('name')
            ->column('parrent')
            ->column('long_description')
            ->column('short_description')
            ->column('sequence')
            ->paginate(15),
        ]);
    }
}
