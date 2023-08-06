<?php

namespace App\Http\Controllers;

use App\Models\Socialmedia;
use Illuminate\Http\Request;

class SocialmediaController extends Controller
{
    public function index()
    {

    }

    public function store()
    {
        $aboutus = Socialmedia::orderBy('id','desc')->get();
        return $aboutus;
    }
}
