<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class CategoryController 
{
    public function __invoke()
    {
        return view('admin.category');
    }
}
