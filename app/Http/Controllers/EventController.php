<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {

    }

    public function store()
    {
        $aboutus = Event::orderBy('id','desc')->get();
        return $aboutus;
    }
}
