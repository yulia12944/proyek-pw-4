<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MSController extends Controller
{
    public function index()
    {
        return view('MS');
    }
}