<?php

namespace App\Http\Controllers;

use App\Models\Contactus;
use Illuminate\Http\Request;

class ContactusController extends Controller
{
    public function index()
    {

    }

    public function store()
    {
        $aboutus = Contactus::orderBy('id','desc')->get();
        return $aboutus;
    }

    public function create(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'phoneoremail' => 'required',
            'message' => 'required'
        ]);

        $contactus = new Contactus();
        $contactus->username = $request->username;
        $contactus->phoneoremail = $request->phoneoremail;
        $contactus->message = $request->message;

        $contactus->save();
        return response([
            'message' => 'Success',
            'data' => $contactus,
        ]);
    }
}
