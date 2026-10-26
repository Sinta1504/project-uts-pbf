<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FitnessController extends Controller
{
    public function index()
    {
        return view('fitness.index');
    }

    public function about()
    {
        return view('fitness.about');
    }

    public function course()
    {
        return view('fitness.course');
    }

    public function blog()
    {
        return view('fitness.blog');
    }

    public function feature()
    {
        return view('fitness.feature');
    }

    public function contact()
    {
        return view('fitness.contact');
    }
}