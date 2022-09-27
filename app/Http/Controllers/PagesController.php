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
    public function product()
    {
        $names=array("Existing accout", "Create accout", "Current accout", "Saving accout");
        return view('product')
        ->with('names', $names);
    }
}
