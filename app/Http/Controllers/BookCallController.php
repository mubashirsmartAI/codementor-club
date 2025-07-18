<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookCallController extends Controller
{
    public function index()
    {
        return view('book_call');
    }
} 