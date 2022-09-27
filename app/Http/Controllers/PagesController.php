<?php

namespace App\Http\Controllers;

use App\Models\Pages;
use App\Http\Requests\StorePagesRequest;
use App\Http\Requests\UpdatePagesRequest;

class PagesController extends Controller
{
    public function index()
    {
        $message = "Welcome";
        return View('home')->with('message', $message);
    }
    public function team()
    {
        $name = "Mr. x";
        $id="11-11111-1";
        $dob = "10-10-2010";
        $names=array("Mr. X", "Mr. Y", "Mr. Z");
        return view('team')
        ->with('name', $name)
        ->with('id', $id)
        ->with('dob', $dob)
        ->with('names', $names);
    }
}
