<?php

namespace App\Http\Controllers;

use App\Model\Category;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $categories= Category::all();
        dd($categories);
        return view('frontend.categories.list',['name'=>'text abc']);

    }
}
