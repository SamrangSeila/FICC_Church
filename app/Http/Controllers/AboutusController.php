<?php

namespace App\Http\Controllers;

use App\Models\Aboutus;
use Illuminate\Http\Request;

class AboutusController extends Controller
{
    public function index()
    {

    }

    public function store()
    {
        $aboutus = Aboutus::orderBy('id','desc')->latest()->limit(1)->get();
        return $aboutus;
    }
}
