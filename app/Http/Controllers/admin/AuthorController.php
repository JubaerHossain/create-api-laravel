<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('author');
    }


    public function index()
    {
         return view('admin.home.author');
    }
}
