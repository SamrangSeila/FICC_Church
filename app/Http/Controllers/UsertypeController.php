<?php

namespace App\Http\Controllers;

use App\Models\Usertype;
use Illuminate\Http\Request;

class UsertypeController extends Controller
{
    public function index()
    {

    }

    public function store()
    {
        $aboutus = Usertype::with('events')->orderBy('id','desc')->get();
        return $aboutus;
    }
}
