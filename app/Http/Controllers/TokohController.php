<?php

namespace App\Http\Controllers;

use App\Models\Tokoh;
use Illuminate\Http\Request;

class TokohController extends Controller
{
    public function index()
    {
        return view('home', [
            "title" => "Home",
            "tokohs" => Tokoh::all()
        ]);
    }

    public function view(Tokoh $tokoh) 
    {
        return view('viewcard', [
            "title" => "View More",
            "tokoh" => $tokoh
        ]);
    }
}
