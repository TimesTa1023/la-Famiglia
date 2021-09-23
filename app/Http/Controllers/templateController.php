<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class templateController extends Controller
{
    public function show(){
        return view('layout.master');
    }



}
