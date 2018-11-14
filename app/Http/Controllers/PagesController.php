<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Homepage';
        return view('pages/index', compact('title'));
    }

    public function shop(){
        $title = 'Shop';
        return view('pages/shop', compact('title'));
    }

    public function contact(){
        $title = 'Contact';
        return view('pages/contact', compact('title'));
    }
}
