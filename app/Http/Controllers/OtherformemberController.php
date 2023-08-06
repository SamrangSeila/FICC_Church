<?php

namespace App\Http\Controllers;

use App\Models\Otherformember;
use Illuminate\Http\Request;

class OtherformemberController extends Controller
{
    public function index()
    {

    }

    public function store()
    {
        $aboutus = Otherformember::orderBy('id','desc')->get();
        return $aboutus;
    }
}
