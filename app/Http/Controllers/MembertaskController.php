<?php

namespace App\Http\Controllers;

use App\Models\Membertask;
use Illuminate\Http\Request;

class MembertaskController extends Controller
{
    public function index()
    {

    }

    public function store()
    {
        $aboutus = Membertask::with('usertype')->orderBy('id','desc')->get();
        return $aboutus;
    }
}
