<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $title = "Projecten";
        return view('pages.projecten')->with('title', $title);
    }
}
