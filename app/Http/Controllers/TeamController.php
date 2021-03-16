<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $title = "Ons team";
        return view('pages.ons-team')->with('title', $title);
    }
}
