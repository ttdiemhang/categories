<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return view('frontend.categories.list',['name'=>'text abc']);
    }
}
